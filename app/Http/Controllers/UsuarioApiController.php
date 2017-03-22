<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioApiController extends Controller
{
    //
    public function login ($id){
        $usuario = Usuario::findOrFail($id);
        return json_encode($usuario);
    }
}
