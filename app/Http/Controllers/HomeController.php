<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Favor;

class HomeController extends Controller
{
    public function index()
    {
    	return view('pages.home');
    }

    public function cuenta()
    {
        return view('pages.account');
    }
    
    public function llistar() 
    {
        $favors = Favor::all();
        //dd($favors[0]->titol);
        return view('pages.list')
                ->with('favors', $favors);

    }
    
    public function show($id)
    {
    	//return Favor::findOrFail($id);
        //dd("HELLOO");
        $favor = Favor::findOrFail($id);
        return view('pages.show')->with('favor', $favor);
        
    }
}
