<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contamensa;

class ContamensaencriController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function index()
    // {
    //     $privateKey = file_get_contents(storage_path('app/private.pem'));

    //     $contamensa = Contamensa::all();
    //     // $contamensa['contamensa'] = Contamensa::all();
    //     return view('contamen.encriptada', compact('contamensa'));
    // }

    public function show()
    {
        $privateKey = file_get_contents(storage_path('app/private.pem'));

        $contamensa = Contamensa::all();
        // $contamensa['contamensa'] = Contamensa::all();
        return view('contamen.encriptada', compact('contamensa'));
    }
    
}
