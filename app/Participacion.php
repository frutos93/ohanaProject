<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participacion extends Model
{
    protected $table = 'participacion';

    public function participante(){
        return $this->hasOne('App\\Participante', "id");
    }

    public function evento(){
        return $this->hasOne('App\\Evento', "id");
    }
}