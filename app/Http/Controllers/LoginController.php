<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Auth;
use app\User;

class LoginController extends Controller
{

      protected function validator(array $data)
      {
          return Validator::make($data, [
              'name' => 'required|string|max:255',
              'email' => 'required|string|email|max:255|unique:users',
              'password' => 'required|string|min:6|confirmed',
          ]);
      }
      protected function create(array $data)
      {
          return User::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'password' => bcrypt($data['password']),
          ]);
      }
      public function register(Request $request)
      {
          $this->validator($request->all())->validate();

          $this->create($request->all());
          return redirect()->route('home');
      }
      public function login(Request $request){
        $input = $request->all();
        // return $input;
        if(Auth::attempt([
          'email' => $request->email,
          'password' => $request->password
        ])){
          $user = User::where('email',$request->email)->first();
          // if($user->is_admin()){
          //     return redirect()->route('entryTransaction');
          // }
          return redirect()->route('adminDashboard');
        }
        return redirect()->back();
      }

      public function showRegistrationForm()
      {
          return view('auth.register');
      }
}
