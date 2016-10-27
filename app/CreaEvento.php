<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreaEvento extends Model
{
    protected $table = 'crea_evento';

    public function director(){
        return $this->hasOne('App\\Director', "id");
    }

    public function evento(){
        return $this->hasOne('App\\Evento', "id");
    }
}