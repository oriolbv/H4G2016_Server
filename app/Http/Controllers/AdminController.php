<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Favor;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // obtenim tots els usuaris
        $favors = Favor::all();
        //dd($favors[0]->titol);
        return View::make('favors.index')
                ->with('favors', $favors);
        /*if (Session::get('usuariLoguejat') != null) {
            Session::save();
            // carreguem la vista i li passem tots els usuaris
            return View::make('usuaris.index')
                ->with('usuaris', $usuaris);
        } else {
            return View::make('auth.notLoggedInto');
        }*/
    }
    
    
}