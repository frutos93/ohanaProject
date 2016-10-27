<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'evento';
    
    public function participacion_voluntariado(){
        return $this->hasMany('App\\ParticipacionVoluntariado', 'evento_id');
    }

    public function participaciones(){
        return $this->hasMany('App\\Participacion', 'evento_id');
    }

    public function creado_por(){
        return $this->hasOne('App\\Director', 'id', 'creado_por');
    }

    public function coordinado_por(){
        return $this->hasMany('App\\CoordinaEvento', 'evento_id');
    }
}