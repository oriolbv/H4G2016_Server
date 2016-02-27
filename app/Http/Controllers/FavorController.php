<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Favor;
use App\User;

class FavorController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->json()->all();
        
        $favor = Favor::create($input);

        // $user = User::findOrFail($input['user_id']);

        // $favor = $user->favors()->create($input);

        return response()->json(['success' => 1, 'data' => $favor]);
        
    }

    public function show($id)
    {
    	return Favor::findOrFail($id);
    }

    public function favorsDemanats()
    {
    	return Favor::with('user')->demanats()->orderBy('created_at', 'DESC')->get();
    }

    public function favorsOferts()
    {
    	return Favor::with('user')->oferts()->orderBy('created_at', 'DESC')->get();
    }

    public function favorsByUser($id)
    {
        $user = User::findOrFail($id);

        return $user->favors();
    }

}
