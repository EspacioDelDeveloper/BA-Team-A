<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Session;
use Redirect;

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
  // protected $redirectTo = '/usuarioRegistrado';

  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('guest');
  }

  public function registerRecruiter()
  {
    return view('auth\registerRecruiter');
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
      'name' => ['required', 'string', 'max:255'],
      'lastName' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
  }

  /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return \App\User
  */
  protected function create(array $data)
  {

    $user = User::create([
      'name' => $data['name'],
      'lastName' => $data['lastName'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),
    ]);

    if($data['role_id'] == 1) {
      $user->roles()->attach(Role::where('name', 'developer')->first());
    }

    if($data['role_id'] == 3) {
      $user->roles()->attach(Role::where('name', 'recruiter')->first());
    }

    return $user;
  }

  public function register(Request $request) {

    $this->validator($request->all())->validate();

    $user = $this->create($request->all());

    if(empty($user)) { // Failed to register user
      redirect('/register'); // Wherever you want to redirect
    }

    event(new Registered($user));

    $this->guard()->login($user);

    // Success redirection - which will be attribute `$redirectTo`
    Session::flash('usuarioRegistrado', "¡Bienvenido al sistema ");
    return Redirect::route('home');
  }
}
