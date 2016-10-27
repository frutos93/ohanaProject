<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coordinador extends Model
{
    protected $table = 'coordinador';

    public function eventos(){
        return $this->hasMany('App\\CoordinaEvento', "id");
    }
}