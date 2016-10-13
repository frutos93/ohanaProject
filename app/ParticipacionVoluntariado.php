<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParticipacionVoluntariado extends Model
{
    protected $table = 'participacion_voluntariado';
    
    public function evento(){
        return $this->hasOne('App\\Evento', "id");
    }
    public function voluntario(){
        return $this->hasOne('App\\Voluntario', "id");
    }
}