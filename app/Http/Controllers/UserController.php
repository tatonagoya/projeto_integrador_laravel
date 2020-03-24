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







    public function create()
    {
        $perfis = User::all();

        return view('home')->with('perfis', $perfis);
    }

    
  


    public function store(Request $request)
    {
        $perfis = User::find($id);
        
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6|confirmed'
           
        ]);
        
        
        
        
        
        
        
        // $request->validate([
        //     'nome_local' => 'required|min:10',
        //     'bairro' => 'required|min:5',
        //     'endereco' => 'required|min:10',
        //     'imagem' => 'nullable|min:3'
        // ]);

        // $request->all();
        $arquivo = $request->file('imagem');
        
        if(empty($arquivo))
        {
            $caminhoRelativo = null;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        User::create([
            'bairro_user' => $request->input('bairro_user'),
            'local_trabalho' => $request->input('local_trabalho'),
            'instituicao_ensino' => $request->input('instituicao_ensino'),
            // ,
            // 'duracao' => $request->input('duracao'),
            'imagem' => $caminhoRelativo
            // 'id_genero' => $request->input('genero')
        ]);

        return redirect('/home');

    }






















    public function edit($id)
    {   
        $user = User::find($id);
        return view('editarPerfil')->with(['user' => $user]);  
        

    }

    public function editPerfil($id)
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
    


        $arquivo = $request->file('imagem');

        if(empty($arquivo)){
            $caminhoRelativo = $user->imagem;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }


        $user->name = $request->input('name');
        
        $user->password = bcrypt($request->input('password'));
        $user->bairro_user = $request->input('bairro_user');
        $user->local_trabalho = $request->input('local_trabalho');
        $user->instituicao_ensino = $request->input('instituicao_ensino');
        $user->imagem = $caminhoRelativo;
        

        // var_dump($user);
        // die;

        $user->save();


        return redirect('home');
        // return redirect('/editarPerfil/' . $user->id);
    }



    public function updatePerfil(Request $request, $id)
    { 
        
        // dd($request->all());
        // die;
    
        $perfil = User::find($id);

        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6|confirmed'
            
           
        ]);
    

        $arquivo = $request->file('imagem');

        if(empty($arquivo)){
            $caminhoRelativo = $perfil->imagem;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }


        $peril->name = $request->input('name');
        
        $perfil->password = bcrypt($request->input('password'));
        $perfil->bairro_user = $request->input('bairro_user');
        $perfil->local_trabalho = $request->input('local_trabalho');
        $perfil->instituicao_ensino = $request->input('instituicao_ensino');
        $perfil->imagem = $caminhoRelativo;



        // var_dump($user);
        // die;

        $perfil->save();

        return redirect('/home');
    }




    
}



