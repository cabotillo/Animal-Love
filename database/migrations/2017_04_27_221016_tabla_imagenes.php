<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaImagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::dropIfExists('imagenes');
        Schema::create('imagenes', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('idImagen');
            $table->integer('idMascota')->unsigned();
            $table->foreign('idMascota')->references('idMascota')->on('mascotas')->onDelete('cascade');
            $table->string('Imagen','25');
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
       Schema::drop('imagenes');
    }
}
