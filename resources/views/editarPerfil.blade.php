@extends('layouts.master')

@section('title', 'Editar Perfil')

@section('content')

<div id="editarPerfil01" class="row" style="background-color: black";>


    <div class="flex my-4 col-md-6 col-lg-6 col-xl-6">
        <img width="300px" src="{{ asset('img/avatar_usuario.jpg')}}" alt="..." class="card-img">
        
    </div>

    <div class="col-md-6 col-lg-6 col-xl-6 mt-4">

        <div class="flex" style="text-align: center;">
            <h3 style="color: white;"><b>Roberta Nascimento</b></h3>
            
        </div>

        <div class="flex mt-4" style="text-align: center;">

            <ul class="list-unstyled col-md-12 col-lg-12 col-xl-12">
                <li>
                    <p style="color: white;">Mora no bairro Santana</p>
                </li>

                <li>
                    <p style="color: white;">Trabalha na empresa Nike</p>
                </li>

                <li>
                    <p style="color: white;">Estudou na instituição de ensino PUC-SP</p>
                </li>

            </ul>

        </div>


    </div>


</div>


<div id="editarPerfil02" class="row mt-5 flex-column">

    

    <h2 style="text-align: center">Atualize o seu perfil!</h2>

    <form class="center mt-4" method="POST" action="/filmes/altera-filme/{{$filme->id}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('POST') }}

        <div class="form-group">
            <label for="inputAddress" style="font-size: 18px">Nome Completo</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Roberta Nascimento">
        </div>
        {{-- <div class="form-group">
            <label for="exampleFormControlSelect1" style="font-size: 18px">Gênero</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Não-binário</option>
              <option>Feminino</option>
              <option>Masculino</option>
            </select>
          </div> --}}
        <div class="form-group">
          <label for="inputAddress" style="font-size: 18px">Bairro</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Santana">
        </div>
        <div class="form-group">
          <label for="inputAddress2" style="font-size: 18px">Local de Trabalho</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Nike">
        </div>
        <div class="form-group">
            <label for="inputAddress2" style="font-size: 18px">Instituição de Estudo</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="PUC-SP">
          </div>

        
        
            <div class="form-group mt-5">
              <label for="exampleFormControlFile1">Alterar Foto de Perfil</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        
        
        

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




        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
    </form>






</div>


@endsection