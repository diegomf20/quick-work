<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table="publicacion";
    
    public function empresa()
    {
        return $this->belongsTo('App\Model\Empresa');
    }
}
