<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
// use App\Genero;

class PerfilController extends Controller
{
      
    //retornando formulario para editar filmes
    public function edit($id){
        $perfil = Perfil::find($id);

        // $generos = Genero::all();

        return view('editarPerfil')->with([
            'perfil' => $perfil
            // , 
            // 'generos' => $generos
        ]);
    }

    // alterando filme
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|min:3',
            'bairro_user' => 'required|min:5',
            'local_trabalho' => 'required|min:3',
            'instituicao_ensino' => 'required|min:3'
            // ,
            // 'imagem' => 'nullable|min:2'
        ]);

        $perfil = Perfil::find($id);

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

        $perfil->name = $request->input('name');
        $perfil->bairro_user = $request->input('bairro_user');
        $perfil->local_trabalho = $request->input('local_trabalho');
        $perfil->instituicao_ensino = $request->input('instituicao_ensino');
        // $local->imagem = $caminhoRelativo;

        $perfil->save();

        return redirect('/editarPerfil');
    }


    







}