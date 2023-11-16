<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ContamensaController;
use App\Http\Controllers\ContamensaencriController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/aviso', function () {
    return view('legal/aviso');
});

Route::get('/terminos', function () {
    return view('legal/terminos');
});


Route::resource('contacto', ContactoController::class);
Route::resource('contamensa', ContamensaController::class);
Route::resource('contamen', ContamensaencriController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
