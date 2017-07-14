<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatDestinoCredito extends Model
{
    protected $table = "cat_destino_creditos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
        'orden',
    ];
}
