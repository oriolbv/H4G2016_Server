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
        $input = $request->json()->all();
        
        $usuari = Favor::firstOrCreate(array('titol' => $input['titol'], 'descripcio' => $input['descripcio'], 'lat' => $input['lat'], 'long' => $input['long'], 'demanar' => $input['demanar'], 'user_id' => $input['user_id'], 'categoria' => $input['categoria']));
        return response()->json(['success' => 1, 'data' => $usuari]);

        
        
    }

    public function show($id)
    {
    	return Favor::findOrFail($id);
    }

    public function favorsDemanats()
    {
    	return Favor::demanats()->get();
    }

    public function favorsOferts()
    {
    	return Favor::oferts()->get();
    }

}
