<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id)
    {   
        $user = User::find($id);
        return view('editarPerfil')->with(['user' => $user]);  
        

    }

    public function update(Request $request, $id)
    { 
        
        // dd($request->all());
        // die;
    
        $user = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            // 'email' => 'email|required|unique:users,email,'.$this->segment(2),
            'password' => 'required|min:6|confirmed',
            'bairro_user' => 'nullable|min:5',
            'local_trabalho' => 'nullable|min:3',
            'instituicao_ensino' => 'nullable|min:3'
        ]);
    

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->bairro_user = $request->input('bairro_user');
        $user->local_trabalho = $request->input('local_trabalho');
        $user->instituicao_ensino = $request->input('instituicao_ensino');

        var_dump($user);
        die;

        $user->save();

        return redirect('/editarPerfil');
    }

    
}
