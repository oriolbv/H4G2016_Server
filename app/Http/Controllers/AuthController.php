<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;

use App\User;

class AuthController extends Controller
{
    public function login(AuthRequest $request)
    {
    	$user = User::where('email', $request->get('email'))->first();
    	if()
    }
}