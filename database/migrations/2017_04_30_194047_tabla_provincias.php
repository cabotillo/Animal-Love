<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaProvincias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //tabla provincias
        Schema::dropIfExists('provincias');
        Schema::create('provincias', function (Blueprint $table) {

        $table->engine = 'InnoDB';
        $table->string('idProvincia');
        $table->string('Provincia', '100');

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
    }
}
