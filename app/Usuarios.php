<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuarios extends Authenticatable
{
	use Notifiable;

    //
    protected $fillable = ['nombre','apellidos','login','password','email','telefono'];
    protected $hidden = ['password'];
}

