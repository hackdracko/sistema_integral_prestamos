<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatCompaniaCelular extends Model
{
    protected $table = "cat_compania_celulares";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'descripcion',
    ];
}
