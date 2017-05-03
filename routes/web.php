<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/editarperfil', function () {
	Auth::logout();
    return view('editarperfil');
});
Route::get('/contacto', function () {
	Auth::logout();
    return view('contacto');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


