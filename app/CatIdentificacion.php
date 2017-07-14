<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatIdentificacion extends Model
{
    protected $table = "cat_identificaciones";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
    ];
}
