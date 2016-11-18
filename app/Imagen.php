<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $table = 'imagen';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'descripcion', 'galeria_id', 'url'
    ];
    
    public function galeria(){
        return $this->hasOne('App\\Galeria', "id", 'galeria_id');
    }
}