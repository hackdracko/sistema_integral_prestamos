<?php

namespace App\Http\Controllers;

use App\CatCompaniaCelular;
use App\CatCompetencia;
use App\CatDestinoCredito;
use App\CatEstado;
use App\CatEstadoCivil;
use App\CatGenero;
use App\CatIdentificacion;
use App\CatNacionalidad;
use App\CatOcupacion;
use App\CatStsGrupoCliente;
use App\Grupo;
use App\Usuario;

class UsuarioController extends Controller
{
    public function login ($id){
        $usuario = Usuario::findOrFail($id);
        $usuario->promotor->sucursal->get();
        return json_encode($usuario);
    }

    public function getCatalogs(){
        $catCompaniaCelulares = CatCompaniaCelular::all();
        $catCompetencias = CatCompetencia::all();
        $catDestinoCreditos = CatDestinoCredito::all();
        $catEstados = CatEstado::all();
        $catEstadosCiviles = CatEstadoCivil::all();
        $catGeneros = CatGenero::all();
        $catIdentificaciones = CatIdentificacion::all();
        $catOcupaciones = CatOcupacion::all();
        $catStsGrupoCliente = CatStsGrupoCliente::all();
        $catNacionalidades = CatNacionalidad::all();
        $resultado = array(
            'catCompaniaCelulares' => $catCompaniaCelulares,
            'catCompetencias' => $catCompetencias,
            'catDestinoCreditos' => $catDestinoCreditos,
            'catEstados' => $catEstados,
            'catEstadosCiviles' => $catEstadosCiviles,
            'catGeneros' => $catGeneros,
            'catIdentificaciones' => $catIdentificaciones,
            'catOcupaciones' => $catOcupaciones,
            'catStsGrupoCliente' => $catStsGrupoCliente,
            'catNacionalidades' => $catNacionalidades,
        );
        return json_encode($resultado);
    }



    public function test ($id){
        echo "Este es el id ". $id;
    }

    public function grupo ($id){
        $grupos = Grupo::findOrFail($id);
        $grupos->promotores;
        return json_encode($grupos);
    }
}
