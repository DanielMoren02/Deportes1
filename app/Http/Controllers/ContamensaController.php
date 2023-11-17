<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contamensa;

class ContamensaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $privateKey = file_get_contents(storage_path('app/private.pem'));

        $contamensa = Contamensa::all();

        foreach ($contamensa as $conta) {
            $conta->mensajeEncriptado = $conta->mensaje;
            $conta->correoEncriptado = $conta->correo;

            $conta->mensajedes = $this->decrypt($conta->mensaje, $privateKey);
            $conta->correodes = $this->decrypt($conta->correo, $privateKey);
        }

        return view('contamensa.index', compact('contamensa'));
    }


    private function decrypt($encryptedData, $privateKey)
    {
        $encryptedData = base64_decode($encryptedData);
        openssl_private_decrypt($encryptedData, $decryptedData, $privateKey);
        return $decryptedData;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contamensa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $publicKey = file_get_contents(storage_path('app/public.pem'));

        $datosContamensa = request()->except('_token');
        // Cifra los datos
        $datosContamensa['mensaje'] = $this->encrypt($datosContamensa['mensaje'], $publicKey);
        $datosContamensa['correo'] = $this->encrypt($datosContamensa['correo'], $publicKey);
        Contamensa::insert($datosContamensa);
        $contamensa['contamensa'] = Contamensa::all();

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
