<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',50);
            $table->string('descripcion',500);
            $table->string('educacion',15);
            $table->integer('experiencia');
            $table->string('edad',15);
            $table->string('conocimiento',50);
            $table->string('lugar',15);
            $table->enum('estado', ['0', '1'])->default('0');
            $table->unsignedInteger('empresa_id')->nullable();
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
        Schema::dropIfExists('publicacion');
    }
}
