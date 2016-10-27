<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'director';

    public function eventos(){
        return $this->hasMany('App\\Evento', "creado_por");
    }
}