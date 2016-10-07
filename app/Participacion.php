<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    protected $table = 'participacion';

    public function participante(){
        return $this->hasOne('App\\Participante');
    }

    public function evento(){
        return $this->hasOne('App\\Evento');
    }
}