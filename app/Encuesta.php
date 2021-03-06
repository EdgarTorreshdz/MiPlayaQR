<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    protected $table='encuestas';

    public function playa()
    {
        return $this->belongsTo('App\Playa', 'idplaya');
    }
}
