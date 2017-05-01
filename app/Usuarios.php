<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;


class Usuarios extends Model implements AuthenticatableContract
{
	use Authenticatable;

    //
    protected $fillable = ['nombre','apellidos','login','password','email','telefono','provincia','tipo'];
    protected $hidden = ['password','remember_token'];
}
