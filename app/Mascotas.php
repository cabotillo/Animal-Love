<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    //

    public function usuario(){
    	return $this->hasOne('App\Usuarios');
    }
}
