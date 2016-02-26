<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;

use App\Http\Requests;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;

use App\User;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
        $input = $request->json()->all();

    	$user = User::where('email', $input['email'])->first();
    	if($user) {
    		$pw = $input['password'];
    		if (Hash::check($pw, $user->password)) return $user;
    	}
    	return response()->json(['success' => 0, 'data' => 'Usuario o clave incorrectos.']);
    }

    public function register(Request $request)
    {
        $input = $request->json()->all();
        $input['password'] = Hash::make($input['password']);

    	return $user = User::create($input);
    }
}
