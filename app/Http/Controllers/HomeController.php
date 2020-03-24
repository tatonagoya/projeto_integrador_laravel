<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {

    //     return view('home');
    // }



    public function index()
    {
        $perfis = User::paginate(50);

        return view('home')->with('perfis', $perfis);
    }

    public function show($id, Request $request)
    {
        $perfis = User::paginate(50);

       
       
        return view('home', ['home' => User::findOrFail($id)])->with('perfis', $perfis);

    }


   

    

    // retornando formulario para criar filmes

    public function create()
    {
        $perfis = User::all();

        return view('home')->with('perfil', $perfis);
    }

    
    // criando registro na tabela filmes
    public function store(Request $request)
    {
        // $request->validate([
        //     'nome_local' => 'required|min:10',
        //     'bairro' => 'required|min:5',
        //     'endereco' => 'required|min:10',
        //     'imagem' => 'nullable|min:3'
        // ]);

        // $arquivo = $request->file('imagem');
        
        // if(empty($arquivo))
        //{
        //     $caminhoRelativo = null;
        // } else {
        //     $arquivo->storePublicly('uploads');
        //     $caminhoAbsoluto = public_path()."/storage/uploads";
        //     $nomeArquivo = $arquivo->getClientOriginalName();
        //     $caminhoRelativo = "storage/uploads/$nomeArquivo";
        //     $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        //}

        User::create([
            // 'nome_local' => $request->input('nome_local'),
            // 'bairro' => $request->input('bairro'),
            // 'endereco' => $request->input('endereco'),
            // // ,
            // // 'duracao' => $request->input('duracao'),
            // 'imagem' => $caminhoRelativo
            // // 'id_genero' => $request->input('genero')
        ]);

        return redirect('/home');
    }






    
    public function edit($id)
    {   
        $perfis = User::find($id);
        return view('perfil')->with(['perfil' => $perfis]);  
        

    }

    public function update(Request $request, $id)
    { 
        
        // dd($request->all());
        // die;
    
        $perfis = User::find($id);

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

        $perfis->save();

        return redirect('/home/' . $user->id);
    }




}
