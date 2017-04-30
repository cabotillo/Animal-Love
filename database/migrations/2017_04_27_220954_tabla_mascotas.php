<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaMascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla mascotas

        Schema::create('mascotas', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('idMascota');
            $table->integer('idUsuario')->unsigned();
            //$table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('cascade');
            $table->string('Nombre','25');
            $table->string('Animal','25');
            $table->string('Raza','50');
            $table->string('Genero','25');
            $table->string('Tamanyo','10')->default('Mediano');
            $table->string('Avatar','25')->default('avatar_animal.png');
            $table->integer('Edad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('mascotas');    
    }
}
