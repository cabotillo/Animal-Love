<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla usuarios

        Schema::dropIfExists('usuarios');
        Schema::create('usuarios', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('Nombre','25');
            $table->string('Apellidos','50');
            $table->string('Login','25')->unique();
            $table->string('Password');
            $table->string('Email','50')->unique();
            $table->string('Telefono');
            $table->string('Provincia','50')->default('Islas Baleares');
            $table->string('Avatar','25')->default('avatar_usuario.png');
            $table->integer('Tipo')->default('1');
            $table->rememberToken();
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
        //
        
        Schema::drop('usuarios');
    
        
    }
}
