@extends('layouts.master')

@section('title', 'Editar Local')

@section('content')

<div id="editarLocal01" class="row" style="background-color: black";>


    <div class="flex my-4 col-md-6 col-lg-6 col-xl-6">
        <img width="300px" src="{{$local->imagem_image}}" alt="..." class="card-img">
        
    </div>

    <div class="col-md-6 col-lg-6 col-xl-6 mt-4">

        <div class="flex" style="text-align: center;">
            <h3 style="color: white;"><b>{{$local->nome_local}}</b></h3>
            
        </div>

        <div class="flex mt-4" style="text-align: center;">

            <ul class="list-unstyled col-md-12 col-lg-12 col-xl-12">
                <li>
                    <p style="color: white;">Bairro - {{$local->bairro}}</p>
                </li>

                <li>
                    <p style="color: white;">Endereço - {{$local->endereco}}</p>
                </li>
             
            </ul>

        </div>


    </div>


</div>

<div id="editarLocal02" class="row mt-5 flex-column">

    <h2 style="text-align: center">Atualize esse local!</h2>

    <form class="center mt-4" method="POST" action="/editarLocal/{{$local->id}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        
        <div class="form-group">
            <label for="nome_local" style="font-size: 18px;">Nome do Local</label>
            <input type="text" name="nome_local" class="form-control{{$errors->has('nome-local') ? ' is-invalid':''}}" 
                value="{{ $local->nome_local }}" id="nome_local" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('nome_local') }}</div>
        </div>

        <div class="form-group">
            <label for="bairro" style="font-size: 18px">Bairro</label>
            <input type="text" name="bairro" class="form-control{{$errors->has('bairro') ? ' is-invalid':''}}" 
            value="{{ $local->bairro }}" id="bairro" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
        </div>

        <div class="form-group">
            <label for="endereco" style="font-size: 18px">Endereço</label>
            <input type="text" name="endereco" class="form-control{{$errors->has('endereco') ? ' is-invalid':''}}" 
            value="{{ $local->endereco }}" id="endereco" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('endereco') }}</div>
        </div>



        {{-- <div class="form-group">
            <label for="inputAddress" style="font-size: 18px">Nome</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Quadra 01 Parque do Ibirapuera">
          </div>
        <div class="form-group">
          <label for="inputAddress" style="font-size: 18px">Bairro</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Vila Mariana">
        </div>
        <div class="form-group">
          <label for="inputAddress2" style="font-size: 18px">Endereço</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Av. Pedro Álvares Cabral">
        </div> --}}
       
        
            {{-- <div class="form-group mt-5">
              <label for="exampleFormControlFile1">Alterar Foto do Local</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div> --}}
        


            <div class="form-group mt-5">
                <img class="w-70" src="{{ $local->imagem_image }}" alt="">
            </div>
            <div class="form-group">
                <label for="imagem">Alterar Foto do Local</label>
                <input type="file" name="imagem" class="form-control pt-3 pb-5" id="imagem">
            </div>
        

        <div>

            <h3 class="mt-5 mb-3" style="text-align: center">Selecione as atividades praticáveis nesse local:</h3>

            <ul class="nav flex-column mx-3">
                <li id="listaEsportes" class="row nav-item">

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/futCampo.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch12">
                            <label class="custom-control-label" for="customSwitch12">Futebol</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/futsal.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch13">
                            <label class="custom-control-label" for="customSwitch13">Futsal</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/basket.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch3">
                            <label class="custom-control-label" for="customSwitch3">Basquete</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/volei.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch4">
                            <label class="custom-control-label" for="customSwitch4">Vôlei</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/handbol.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch5">
                            <label class="custom-control-label" for="customSwitch5">Handebol</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/corrida.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch6">
                            <label class="custom-control-label" for="customSwitch6">Corrida</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/ciclismo.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch7">
                            <label class="custom-control-label" for="customSwitch7">Ciclismo</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/tenis.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch8">
                            <label class="custom-control-label" for="customSwitch8">Tênis</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/skate.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch9">
                            <label class="custom-control-label" for="customSwitch9">Skate</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/capoeira.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch10">
                            <label class="custom-control-label" for="customSwitch10">Capoeira</label>
                        </div>
                    </div>

                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/icon1.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch11">
                            <label class="custom-control-label" for="customSwitch11">Futebol</label>
                        </div>
                    </div>


                    <div class="mb-4 iconeAddLocal">
                        <img width="100" class="" src="{{ asset('img/icon1.png')}}" alt="">
                        <div class="custom-control custom-switch mt-2">
                            <input type="checkbox" class="custom-control-input" id="customSwitch12">
                            <label class="custom-control-label" for="customSwitch12">Futebol</label>
                        </div>
                    </div>    


                </li>
            </ul>
        </div>




        <button type="submit" class="form-control btn btn-dark btn-block">Salvar</button>
    </form>






</div>


@endsection