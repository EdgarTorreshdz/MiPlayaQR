<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playa extends Model
{
    //
    protected $table='playas';

    public function encuestas()
    {
        return $this->hasMany('App\Encuesta');
    }
    
}
