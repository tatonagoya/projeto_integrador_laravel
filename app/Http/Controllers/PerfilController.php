<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PerfilController extends Controller
{
    // listando filmes 
    public function index()
    {
        $perfis = User::paginate(50);

        return view('perfil')->with('perfis', $perfis);
    }

    public function show($id, Request $request)
    {
        $perfis = User::paginate(50);

       
       
        return view('perfil', ['perfil' => User::findOrFail($id)])->with('perfis', $perfis);

    }


   

    public function create()
    {
        $perfis = User::all();

        return view('home')->with('perfis', $perfis);
    }

    // retornando formulario para criar filmes

    public function store(Request $request)
    {
        $perfis = User::find($id);
        // $perfil = User::find($id);
        
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
        $perfil = User::find($id);
        return view('perfil')->with(['perfil' => $perfil]);  
        

    }

    public function update(Request $request, $id)
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