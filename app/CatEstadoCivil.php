<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatEstadoCivil extends Model
{
    protected $table = "cat_estados_civiles";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
    ];
}
