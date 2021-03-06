@extends('layouts.master')

@section('title', 'Editar Perfil')

@section('content')

<div id="editarPerfil01" class="row" style="background-color: black";>


    <div class="flex my-4 col-md-6 col-lg-6 col-xl-6">
        <img width="300px" src="{{Auth::user()->imagem_image}}" alt="..." class="card-img">
        
    </div>

    <div class="col-md-6 col-lg-6 col-xl-6 mt-4">

        <div class="flex" style="text-align: center;">
            <h3 style="color: white;"><b>{{Auth::user()->name}}</b></h3>
            
        </div>

        <div class="flex mt-4" style="text-align: center;">

            <ul class="list-unstyled col-md-12 col-lg-12 col-xl-12">
                <li>
                    <p style="color: white;">Mora no bairro {{Auth::user()->bairro_user}}</p>
                </li>

                <li>
                    <p style="color: white;">Trabalha na empresa {{Auth::user()->local_trabalho}}</p>
                </li>

                <li>
                    <p style="color: white;">Estudou na instituição de ensino {{Auth::user()->instituicao_ensino}}</p>
                </li>

            </ul>

        </div>


    </div>


</div>


<div id="editarPerfil02" class="row mt-5 flex-column">

    

    <h2 style="text-align: center">Atualize o seu perfil!</h2>

    <form class="center mt-4" method="POST" action='/editarPerfil/{{$user->id}}' enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        
        <div class="form-group">
            <label for="name" style="font-size: 18px;">Nome</label>
            <input type="text" name="name" class="form-control{{$errors->has('name') ? ' is-invalid':''}}" 
                value="{{ $user->name }}" id="name" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        </div>

        {{-- <div class="form-group">
            <label for="email" style="font-size: 18px">E-mail</label>
            <input type="email" name="email" class="form-control{{$errors->has('email') ? ' is-invalid':''}}" 
            value="{{ $user->email }}" id="email" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
        </div> --}} --}}

        <div class="form-group">
            <label for="password" style="font-size: 18px">Senha</label>
            <input type="password" name="password" class="form-control{{$errors->has('password') ? ' is-invalid':''}}" 
            value="{{ $user->password }}" id="password" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
        </div>


        <div class="form-group">
            <label for="password-confirm" style="font-size: 18px">Confirmar Senha</label>
            <input type="password" name="password_confirmation" class="form-control{{$errors->has('password') ? ' is-invalid':''}}" 
            value="{{ $user->password }}" id="password-confirm" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
        </div>

        
        <div class="form-group">
            <label for="bairro_user" style="font-size: 18px">Bairro</label>
            <input type="text" name="bairro_user" class="form-control{{$errors->has('bairro_user') ? ' is-invalid':''}}" 
            value="{{ $user->bairro_user }}" id="bairro_user" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('bairro_user') }}</div>
        </div>

        <div class="form-group">
            <label for="local_trabalho" style="font-size: 18px">Local de Trabalho</label>
            <input type="text" name="local_trabalho" class="form-control{{$errors->has('local_grupo') ? ' is-invalid':''}}" 
            value="{{ $user->local_trabalho }}" id="local_trabalho" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('local_trabalho') }}</div>
        </div>

        <div class="form-group">
            <label for="instituicao_ensino" style="font-size: 18px">Instituição de Ensino</label>
            <input type="text" name="instituicao_ensino" class="form-control{{$errors->has('instituicao_ensino') ? ' is-invalid':''}}" 
            value="{{ $user->instituicao_ensino }}" id="instituicao_ensino" placeholder="">
            <div class="invalid-feedback">{{ $errors->first('instituicao_ensino') }}</div>
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
        
  

            {{-- <div class="form-group col-md-6 col-sm-12">
                <img class="w-100" src="{{ $perfil->imagem_image }}" alt="">
            </div>
            <div class="form-group col-md-6 col-sm-12">
                <label for="imagem">Alterar Foto de Perfil</label>
                <input type="file" name="imagem" class="form-control" id="imagem">
            </div> --}}
        

        <div>

            <h3 class="mt-5 mb-3" style="text-align: center">Selecione as atividades que você quer praticar!</h3>

            <ul class="nav flex-column">
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




        <button type="submit" class="btn btn-dark btn-block">Salvar</button>
    </form>






</div>


@endsection