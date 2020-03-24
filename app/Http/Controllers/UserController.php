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


    // public function show($id, Request $request){
        
    //     $user = User::paginate(50);


    //     return view('perfil', ['user' => User::findOrfail($id)])->with('user', $user);

    // }




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
            'password' => 'required|min:6|confirmed'
           
        ]);
    

        $user->name = $request->input('name');
        
        $user->password = bcrypt($request->input('password'));
        $user->bairro_user = $request->input('bairro_user');
        $user->local_trabalho = $request->input('local_trabalho');
        $user->instituicao_ensino = $request->input('instituicao_ensino');

        // var_dump($user);
        // die;

        $user->save();


        return redirect('home');
        // return redirect('/editarPerfil/' . $user->id);
    }

    
}
