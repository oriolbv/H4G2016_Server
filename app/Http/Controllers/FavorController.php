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
        
        $favor = Favor::create($input);

        // $user = User::findOrFail($input['user_id']);

        // $favor = $user->favors()->create($input);

        // $usuari = Favor::firstOrCreate(array('titol' => $input['titol'], 'descripcio' => $input['descripcio'], 'lat' => $input['lat'], 'long' => $input['long'], 'demanar' => $input['demanar'], 'user_id' => $input['user_id'], 'categoria' => $input['categoria']));
        return response()->json(['success' => 1, 'data' => $favor]);
        
    }

    public function show($id)
    {
    	return Favor::findOrFail($id);
    }

    public function favorsDemanats()
    {
    	return Favor::demanats()->orderBy('created_at', 'DESC')->get();
    }

    public function favorsOferts()
    {
    	return Favor::oferts()->orderBy('created_at', 'DESC')->get();
    }

    public function favorsByUser($id)
    {
        $user = User::findOrFail($id);

        return $user->favors();
    }

}
