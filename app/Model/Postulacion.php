<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    protected $table="postulacion";
    public function empresa()
    {
        return $this->belongsTo('App\Model\Empresa');
    }
    public function postulante()
    {
        return $this->belongsTo('App\Model\Postulante');
    }
    public function publicacion()
    {
        return $this->belongsTo('App\Model\Publicacion');
    }
}
