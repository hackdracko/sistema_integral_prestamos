<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatStsGrupoCliente extends Model
{
    protected $table = "cat_sts_grupocliente";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
    ];
}
