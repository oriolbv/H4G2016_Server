<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Favor;

class FavorController extends Controller
{
    public function store(Request $request)
    {
    	return Auth::user()->favors()->create($request->all());
    }

    public function favorsDemanats()
    {
    	return Favor::demanar()->get();
    }

    public function favorsOferts()
    {
    	return Favor::oferts()->get();
    }
   
}
