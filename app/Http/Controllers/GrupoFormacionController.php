<?php

namespace App\Http\Controllers;

use App\GrupoFormacion;
use Illuminate\Http\Request;

class GrupoFormacionController extends Controller
{
    public function createGroup (Request $request){
        $grupoFormacion = new GrupoFormacion();
        $grupoFormacion->sucursal_id = $request->sucursal_id;
        $grupoFormacion->promotor_id = $request->promotor_id;
        $grupoFormacion->sts_grupocliente_id = 1;
        $grupoFormacion->nombre_grupo = $request->nombre_grupo;
        $grupoFormacion->fecha_alta_grupo = date('Y-m-d');
        $grupoFormacion->promotor_alta = $request->promotor_alta;
        $grupoFormacion->consecutivo_grupo = $request->consecutivo_grupo;
        $grupoFormacion->save();
    }
}
