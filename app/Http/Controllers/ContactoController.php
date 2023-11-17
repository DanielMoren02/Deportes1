<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Tarcredit;
use Illuminate\Support\Facades\Crypt;



class ContactoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacto['contacto'] = Contacto::all();
        $tarjeta['tarjeta'] = Tarcredit::all();
        return view('contacto.index', $contacto, $tarjeta);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules=[
            'nombre' => 'required|min:3',
            'nombre' => 'required|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ]/i',
            'apellido' => 'required|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ]/i',
            'apellido' => 'required|min:3',
            'telefono' => 'required|digits:10',
            'telefono' => 'required|regex:/[0-9]/i',
            'correo' => 'required|email',

            // Validacion de campos de tarjeta
            'nombretar' => 'required|min:3',
            'nombretar' => 'required|regex:/[a-zA-ZñÑáéíóúÁÉÍÓÚ]/i',
            'numtar' => 'required|max:16',
            'numtar' => 'required|min:16',
            'numtar' => 'required|regex:/[0-9]/i',
            'fechaexp' => 'required|regex:/[0-9]/i',
            'fechaexp' => 'required|max:5',
            'fechaexp' => 'required|min:5',
            'cvv' => 'required|max:3',
            'cvv' => 'required|min:3',
            'cvv' => 'required|regex:/[0-9]/i'
        ];

        $messages = [
            'nombre.required' => 'Ingrese el nombre',
            'nombre.min' => 'El nombre necesita tener por lo menos 3 letras',
            'nombre.regex' => 'El nombre no permite caracteres especiales',
            'apellido.regex' => 'El apellido no permite caracteres especiales',
            'apellido.required' => 'Ingrese el apellido',
            'apellido.min' => 'El apellido necesita tener por lo menos 3 letras',
            'correo.required' => 'Ingrese el correo electrónico',
            'correo.email' => 'Ingrese un correo válido',
            'telefono.required' => 'Ingrese su número de celular',
            'telefono.digits' => 'El celular debe ser de 10 digitos',
            'telefono.regex' => 'El celular debe contener solo números',

            // Mensajes de campos de tarjeta
            'nombretar.required' => 'Ingrese el nombre del propietario de la tarjeta',
            'nombretar.min' => 'El nombre necesita tener por lo menos 3 letras',
            'nombretar.regex' => 'El nombre de la tarjeta no permite caracteres especiales',
            'numtar.required' => 'Ingrese el numero de tarjeta',
            'numtar.max' => 'El numero de tarjeta debe de ser de 16 digitos',
            'numtar.min' => 'El numero de tarjeta debe de ser de 16 digitos',
            'numtar.regex' => 'El numero de tarjeta debe de ser solo numeros',
            'fechaexp.required' => 'Ingrese la fecha de expiracion',
            'fechaexp.max' => 'La fecha de expiracion no puede ser de mas de 5 digitos',
            'fechaexp.min' => 'La fecha de expiracion no puede ser de menos de 5 digitos',
            'cvv.required' => 'Ingrese su cvv',
            'cvv.max' => 'El CVV no puede ser de mas de 3 digitos',
            'cvv.min' => 'El CVV no puede ser de menos de 3 digitos',
            'cvv.regex' => 'El CVV deben de ser solo numeros',
        ];

        $this->validate($request, $rules, $messages);


        $publicKey = file_get_contents(storage_path('app/public.pem'));
 
        $contacto = new Contacto;
        $contacto->nombre = $request->input('nombre');
        $contacto->apellido = $request->input('apellido');
        $contacto->telefono = Crypt::encryptString( $request->input('telefono'));
        $contacto->correo = Crypt::encryptString ($request->input('correo'));
        $contacto->save();

        $tar = new Tarcredit;
        $tar->nombretar = $request->input('nombre');
        $tar->idcontacto = $contacto->id;
        $tar->numtar = Crypt::encryptString ($request->input('numtar'));
        $tar->fechaexp = Crypt::encryptString ($request->input('fechaexp'));
        $tar->cvv = Crypt::encryptString ($request->input('cvv'));
        $tar->save();
        return redirect('home');

    }
    private function encrypt($data, $publicKey)
    {
        openssl_public_encrypt($data, $encryptedData, $publicKey);

        return base64_encode($encryptedData);
    }

    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contacto = Contacto::find($id);
        return view('contacto.update')->with('contacto', $contacto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contacto = Contacto::find($id);

        $contacto->nombre = $request->input('nombre');
        $contacto->apellido = $request->input('apellido');
        $contacto->telefono = $request->input('telefono');
        $contacto->correo = $request->input('correo');
        $contacto->save();
        return redirect('contacto');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();
        return redirect('/contacto');
    }
}
