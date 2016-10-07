<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntario extends Model
{
    protected $table = 'voluntario';
    
    public function participacion_voluntariado(){
        return $this->hasMany('App\\ParticipacionVoluntariado', 'voluntario_id');
    }
}