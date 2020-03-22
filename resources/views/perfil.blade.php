@extends('layouts.master')

@section('title', 'Perfil')

@section('content')

    <div id="perfil01" class="row" style="background-color: black";>


        <div class="flex my-4 col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
            <img width="300px" src="{{ asset('img/avatar1.jpg')}}" alt="..." class="card-img">
            
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-4">

            <div class="flex" style="text-align: center;">
                <h3 style="color: white;"><b>Manuela Fernandez</b></h3>
                <h5><a href="#" class="badge badge-secondary mt-2 mr-3"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h5>
            </div>

            <div class="flex mt-5" style="text-align: center;">

                <ul class="list-unstyled col-md-12 col-lg-12 col-xl-12">
                    <li>
                        <p style="color: white;">Mora no bairro Vila Olímpia</p>
                    </li>

                    <li>
                        <p style="color: white;">Trabalha na empresa PMSP</p>
                    </li>

                    <li>
                        <p style="color: white;">Estudou na instituição de ensino FAAP - Fundação Armando Alvares Penteado</p>
                    </li>

                </ul>

            </div>


        </div>


    </div>


    <div id="perfil02" class=" mt-5">

        <h3 style="text-align: center;">Esportes preferidos:</h3>


        <ul class="nav flex row" id="listaEsportes">
            <li class="row nav-item">

                <div class="mb-4 mx-4">

                    <img width="75" class="" src="{{ asset('img/futsal.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Futsal</h6>
                </div>
            </li>


            <li class="row nav-item">

                <div class="mb-4 mx-4">

                    <img width="75" class="" src="{{ asset('img/volei.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Vôlei</h6>
                </div>
            </li>

            <li class="row nav-item">

                <div class="mb-4 mx-4">

                    <img width="75" class="" src="{{ asset('img/corrida.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Corrida</h6>
                </div>
            </li>

            <li class="row nav-item">

                <div class="mb-4 mx-4">

                    <img width="75" class="" src="{{ asset('img/skate.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Skate</h6>
                </div>
            </li>

            <li class="row nav-item">

                <div class="mb-4 mx-4">

                    <img width="75" class="" src="{{ asset('img/capoeira.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Capoeira</h6>
                </div>
            </li>

        </ul>
    </div>


    <div id="perfil03">


        <h3 style="text-align: center;">Atividades</h3>
    
        <ul class="list-unstyled">
            <li class="media my-4" style="background-color: black" ;>
                <img width="100px" src="{{ asset('img/avatar1.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                <div class="media-body mt-2 mr-3">
    
                    <p style="color: white;"><a href="{{ route('perfil') }}"><b>Manuela Fernandez</b></a> mostrou interesse em jogar
                    <b>futebol</b> na <a href="{{ route('locais') }}"><b>Quadra 01 do Parque do Ibirapuera</b>!</a></p>
                    <ul class="list-unstyled container row" style="color: white;">
                        <li class="mr-3 mt-1" ><h6>Sábado, 22 de março - 14h</h6></li>
                        <li class="mr-3">
                            <h5><a href="#" class="badge badge-success"><i class="fas fa-star"></i> Quero Jogar!</a></h5>
                        </li>
                        <li>
                            <h5><a href="#" class="badge badge-info"><i class="fas fa-share"></i> Compartilhar</a></h5>
                        </li>   
                    </ul>
                </div>
            </li>
    
            <li class="media my-4" style="background-color: black" ;>
                <img width="100px" src="{{ asset('img/avatar1.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                <div class="media-body mt-2 mr-3">
    
                    <p style="color: white;"><a href="{{ route('perfil') }}"><b>Manuela Fernandez</b></a> mostrou interesse em jogar
                    <b>futebol</b> na <a href="{{ route('locais') }}"><b>Quadra 01 do Parque do Ibirapuera</b>!</a></p>
                    <ul class="list-unstyled container row" style="color: white;">
                        <li class="mr-3 mt-1" ><h6>Sábado, 22 de março - 14h</h6></li>
                        <li class="mr-3">
                            <h5><a href="#" class="badge badge-success"><i class="fas fa-star"></i> Quero Jogar!</a></h5>
                        </li>
                        <li>
                            <h5><a href="#" class="badge badge-info"><i class="fas fa-share"></i> Compartilhar</a></h5>
                        </li>   
                    </ul>
                </div>
            </li>
    
    
    
            <li class="media my-4" style="background-color: black" ;>
                <img width="100px" src="{{ asset('img/avatar1.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                <div class="media-body mt-2 mr-3">
    
                    <p style="color: white;"><a href="{{ route('perfil') }}"><b>Manuela Fernandez</b></a> mostrou interesse em jogar
                    <b>futebol</b> na <a href="{{ route('locais') }}"><b>Quadra 01 do Parque do Ibirapuera</b>!</a></p>
                    <ul class="list-unstyled container row" style="color: white;">
                        <li class="mr-3 mt-1" ><h6>Sábado, 22 de março - 14h</h6></li>
                        <li class="mr-3">
                            <h5><a href="#" class="badge badge-success"><i class="fas fa-star"></i> Quero Jogar!</a></h5>
                        </li>
                        <li>
                            <h5><a href="#" class="badge badge-info"><i class="fas fa-share"></i> Compartilhar</a></h5>
                        </li>   
                    </ul>
                </div>
            </li>
        </ul>


    </div>






@endsection