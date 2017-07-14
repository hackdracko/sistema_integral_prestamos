<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'promotor_id',
        'usuario',
        'administrador',
        'fecha_vencimiento'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function promotor(){
        return $this->hasOne('App\Promotor', 'id', 'promotor_id');
    }
}
