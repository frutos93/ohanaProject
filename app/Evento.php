<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    
    public function participacion_voluntariado(){
        return $this->hasMany('App\\ParticipacionVoluntariado', 'evento_id');
    }

    public function participacion(){
        return $this->hasMany('App\\Participacion', 'evento_id');
    }
}