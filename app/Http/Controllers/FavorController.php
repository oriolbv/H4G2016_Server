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
        return Favor::create([
            'titol' => $request->get('titol'),
            'descripcio' => $request->get('descripcio'),
            'lat' => $request->get('lat'),
            'long' => $request->get('long'),
            'demanar' => $request->get('demanar'),
            'categoria' => $request->get('categoria'),
            'user_id' => $request->get('user_id')
        ]);

    	return Auth::user()->favors()->create($request->all());
    }

    public function show($id)
    {
    	return Favor::findOrFail($id);
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
