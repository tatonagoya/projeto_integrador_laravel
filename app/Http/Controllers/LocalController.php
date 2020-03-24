<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;
// use App\Genero;

class LocalController extends Controller
{
    // listando filmes 
    public function index(){
        $locais = Local::paginate(50);

        return view('listaLocais')->with('locais', $locais);
    }

    public function show($id, Request $request){
        $locais = Local::
        
        // find(id);
        
        paginate(50);

       
        // $request->validate([
        //     'nome_local' => 'required|min:10',
        //     'bairro' => 'required|min:5',
        //     'endereco' => 'required|min:10',
        //     'imagem' => 'nullable|min:2'
        // ]);

        // $local = Local::find($id);
        // $arquivo = $request->file('imagem');
    
        // if(empty($arquivo)){
        //     $caminhoRelativo = $local->imagem;
        // } else {
        //     $arquivo->storePublicly('uploads');
        //     $caminhoAbsoluto = public_path()."/storage/uploads";
        //     $nomeArquivo = $arquivo->getClientOriginalName();
        //     $caminhoRelativo = "storage/uploads/$nomeArquivo";
        //     $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        // }
        

        
        return view('local', ['local' => Local::findOrfail($id)])->with('locais', $locais);

       
        // return view('local')->with([
        //     'local' => $local ]);
    }


   

    

    // retornando formulario para criar filmes

    public function create(){
        $locais = Local::all();

        return view('addLocal')->with('locais', $locais);
    }

    // public function create(){
    //     $generos = Genero::all();

    //     return view('filmes.adiciona-filme')->with('generos', $generos);
    // }

    // criando registro na tabela filmes
    public function store(Request $request){
        $request->validate([
            'nome_local' => 'required|min:10',
            'bairro' => 'required|min:5',
            'endereco' => 'required|min:10',
            'imagem' => 'nullable|min:3'
        ]);

        $arquivo = $request->file('imagem');
        
        if(empty($arquivo)){
            $caminhoRelativo = null;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        Local::create([
            'nome_local' => $request->input('nome_local'),
            'bairro' => $request->input('bairro'),
            'endereco' => $request->input('endereco'),
            // ,
            // 'duracao' => $request->input('duracao'),
            'imagem' => $caminhoRelativo
            // 'id_genero' => $request->input('genero')
        ]);

        return redirect('/listaLocais');
    }






    
    //retornando formulario para editar filmes
    public function edit($id){
        $local = Local::find($id);

        // $generos = Genero::all();

        return view('editarLocal')->with([
            'local' => $local
            // , 
            // 'generos' => $generos
        ]);
    }

    // alterando filme
    public function update(Request $request, $id){
        $request->validate([
            'nome_local' => 'required|min:10',
            'bairro' => 'required|min:5',
            'endereco' => 'required|min:10',
            'imagem' => 'nullable|min:2'
        ]);

        $local = Local::find($id);

        $arquivo = $request->file('imagem');

        if(empty($arquivo)){
            $caminhoRelativo = $local->imagem;
        } else {
            $arquivo->storePublicly('uploads');
            $caminhoAbsoluto = public_path()."/storage/uploads";
            $nomeArquivo = $arquivo->getClientOriginalName();
            $caminhoRelativo = "storage/uploads/$nomeArquivo";
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
        }

        $local->nome_local = $request->input('nome_local');
        $local->bairro = $request->input('bairro');
        $local->endereco = $request->input('endereco');
        // $filme->duracao = $request->input('duracao');
        $local->imagem = $caminhoRelativo;

        $local->save();

        return redirect('/home');

        
    }


    // excluindo filme
    public function delete($id){
        $local = Local::find($id);

        $local->delete();

        return redirect('/listaLocais');
    }    








}