<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoordinaEvento extends Model
{
    protected $table = 'coordina_evento';

    public function evento_coordinado(){
        return $this->hasOne('App\\Evento', "id");
    }

    public function coordinador(){
        return $this->hasOne('App\\Coordinador', "id");
    }
}