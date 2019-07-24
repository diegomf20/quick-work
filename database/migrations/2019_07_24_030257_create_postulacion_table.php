<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulacion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('publicacion_id')->nullable();
            $table->unsignedInteger('postulante_id')->nullable();
            $table->unsignedInteger('empresa_id')->nullable();
            $table->enum('estado', [
                'Postulado', //postulado
                'CV visto', //CV visto
                'Finalista',  //Finalista
                'Seleccionado', // Seleccionado 
            ])->default('Postulado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulacion');
    }
}
