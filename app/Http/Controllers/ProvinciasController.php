<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provincias;

class ProvinciasController extends Controller
{
    //

	public function index()
	{

		$provincias = Provincias::all();
		
		//$provincias = array('provincias' => array('ES-M' => 'Mallorca');)
	    return view('register',['provincias' => $provincias]);
    }
}
