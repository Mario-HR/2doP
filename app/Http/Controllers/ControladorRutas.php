<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequest;
use Illuminate\Http\Request;

class ControladorRutas extends Controller
{
    public function formUsuarios() {
        return view('formUsuarios');
    }
    public function procesarUsuario(FormRequest $peticionValidada) {
        $nombre = $peticionValidada->input('nombre');

        session()->flash('exito', 'Se guardo el usuario '.$nombre);
        return to_route('formUsuarios');
    }
}
