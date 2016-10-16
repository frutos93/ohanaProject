<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CasaHogar extends Model
{
    protected $table = 'casahogar';

    public function participantes(){
        return $this->hasMany('App\\Participante', 'casahogar_id');
    }
}