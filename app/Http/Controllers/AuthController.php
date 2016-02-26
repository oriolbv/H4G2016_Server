<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;

use App\User;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
    	$user = User::where('email', $request->get('email'))->first();
    	if($user) {
    		$pw = $request->get('password');
    		if (Hash::check($pw, $user->password)) return $user;
    	}
    	return response()->json(['msg' => 'Email o contraseña incorrecto.']); 
    }

    public function register(Request $request)
    {
    	$user = User::create($request->all());
        dd($user);
    }
}
