<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatGenero extends Model
{
    protected $table = "cat_generos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
    ];
}
