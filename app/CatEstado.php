<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatEstado extends Model
{
    protected $table = "cat_estados";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
    ];
}
