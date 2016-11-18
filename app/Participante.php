<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    protected $table = 'participante';

    public function participaciones(){
        return $this->hasMany('App\\Participacion', 'participante_id');
    }
    
    public function casahogar(){
        return $this->hasOne('App\\CasaHogar', "id", 'casahogar_id');
    }
}