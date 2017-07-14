<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotor extends Model
{
    protected $table = "cat_promotores";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'sucursal_id',
        'nombre',
        'paterno',
        'materno',
        'nombre_promotor',
        'telefono',
        'num_empleado'
    ];

    public function usuario(){
        return $this->belongsTo('App\Usuario', 'promotor_id');
    }

    public function sucursal(){
        return $this->hasOne('App\Sucursal', 'id', 'sucursal_id');
    }

    public function grupos(){
        return $this->hasMany('App\Grupo', 'id', 'promotor_id');
    }
}
