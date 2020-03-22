@extends('layouts.master')

@section('title', 'Adicionar Partida')

@section('content')

    <div id="addPartida" class="row flex-column">

        <h2 style="text-align: center">Organize uma partida e convide seus amigos!</h2>
        <form class="center mt-4">
            <div class="form-group">
                <label for="exampleFormControlSelect1" style="font-size: 18px">Selecione o Esporte</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Futebol</option>
                  <option>Basquete</option>
                  <option>Vôlei</option>
                  <option>Handebol</option>
                  <option>5</option>
                </select>
              </div>

              <div class="form-group mb-2">
                <label for="exampleFormControlSelect1" style="font-size: 18px">Selecione o Local</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <h6 class="mt-0">Não encontrou o local que você estava procurando? <a href="{{ route('addLocal') }}" style="color: black"><b>Clique Aqui</b></a> para adicionar um novo local.</h6>
            









          










              <div class="form-group mt-3">
              <label for="inputAddress" style="font-size: 18px">Data</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group">
              <label for="inputAddress2" style="font-size: 18px">Convidar Amigos</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>










            <button type="submit" class="btn btn-primary btn-block mt-5">Criar Partida</button>
        </form>






    </div>



@endsection