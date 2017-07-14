<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatNacionalidad extends Model
{
    protected $table = "cat_nacionalidades";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
    ];
}
