<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    $user = Auth::user();

    public function edit(user{
        $perfil = Perfil::find($id);

        // $generos = Genero::all();

        return view('editarPerfil')->with([
            'perfil' => $perfil
            // , 
            // 'generos' => $generos
        ]);
    }



    
    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    
    
    public function update(Request $request)
    {
        $request->user()
    }
}
