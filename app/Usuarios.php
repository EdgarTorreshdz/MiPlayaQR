<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table='usuarios';
    protected $primarykey='iduser';

    public $timestamps=false;

    protected $fillable=[
    'nombre',
    'correo',
    'password',
    'numero',
    'ubicacion'
    ];
    protected $guarded=[

    ];
}
