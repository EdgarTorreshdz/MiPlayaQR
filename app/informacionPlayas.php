<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformacionPlayas extends Model
{
    //
    protected $table='informacion_playas';

    public function playa()
    {
        return $this->belongsTo('App\Playa', 'idplaya');
    }
}
