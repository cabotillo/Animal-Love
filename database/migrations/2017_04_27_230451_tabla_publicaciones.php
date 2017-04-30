<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaPublicaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla publicaciones
        Schema::dropIfExists('publicaciones');
        Schema::create('publicaciones', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('idPublicacion');
            $table->string('Titulo');
            $table->string('Cuerpo','255');
            $table->integer('idUsuario')->unsigned();
            $table->foreign('idUsuario')->references('idUsuario')->on('usuarios')->onDelete('cascade');
            $table->integer('idMascota')->unsigned();
            $table->foreign('idMascota')->references('idMascota')->on('mascotas')->onDelete('cascade');
            
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
       Schema::drop('publicaciones');
    }
}
