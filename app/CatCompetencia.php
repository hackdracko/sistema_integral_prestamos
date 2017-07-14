<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatCompetencia extends Model
{
    protected $table = "cat_competencias";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
        'orden',
    ];
}
