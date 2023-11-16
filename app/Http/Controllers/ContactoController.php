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
