<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorUsuario;
use Illuminate\Http\Request;

class ControladorRutas extends Controller
{
    public function formUsuarios() {
        return view('formUsuarios');
    }
    public function procesarUsuario(validadorUsuario $peticionValidada) {
        $email = $peticionValidada->input('email');

        session()->flash('exito', 'Se guardo el usuario '.$email);
        return to_route('formUsuarios');
    }
}
