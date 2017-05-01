<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Provincias;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProvinciasController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'login' => 'required|max:25',
            'password' => 'required|min:8',
            'nombre' => 'required|max:25',
            'apellidos' => 'required|max:50',
            'email' => 'required|email|max:50',
            'telefono' => 'required|max:9',
            'provincia' => 'required|max:50',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'login' => $data['login'],
            'password' => bcrypt($data['password']),
            'nombre' => $data['name'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'provincia' => $data['provincia'],
        ]);
    }
}
