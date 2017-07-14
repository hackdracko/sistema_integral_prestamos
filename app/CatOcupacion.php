<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatOcupacion extends Model
{
    protected $table = "cat_ocupaciones";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
        'segmento',
        'orden',
    ];
}
