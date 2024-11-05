<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControladorRutas;

Route::get('/', [ControladorRutas::class, 'formUsuarios'])->name('formUsuarios');

Route::post('/procesarUsuario', [ControladorRutas::class, 'procesarUsuario'])->name('procesarUsuario');