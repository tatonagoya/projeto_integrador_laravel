@extends('layouts.master')

@section('title', 'Local')

@section('content')


    <div id="local01" class="row" style="background-color: black";>

     
            <div class="flex my-4 col-md-6 col-lg-6 col-xl-6">
                <img width="300px" src="{{ asset('img/quadra_ibirapuera.jpg')}}" alt="..." class="card-img">
                
            </div>


            <div class="col-md-6 col-lg-6 col-xl-6 mt-4">

                <div class="flex" style="text-align: center;">
                    <h2 style="color: white;">{{$locais->nome_local}}</h2>
                    <h5><a href="#" class="badge badge-secondary mt-2 mr-3"><i class="fas fa-user-plus"></i> Seguir</a></h5>
                </div>

                <div class="flex mt-4" style="text-align: center;">

                    <ul class="list-unstyled col-md-12 col-lg-12 col-xl-12">
                        <li>
                            <p style="color: white;">Bairro - {{$locais->bairro}}</p>
                        </li>

                        <li>
                            <p style="color: white;">Endereço - {{$locais->endereco}}</p>
                        </li>

                    </ul>

                </div>



                <div class="mt-2">


                    <ul class="list-unstyled">
                
                
                
                        <li class="nav-item mb-2">
                            <a href="{{ route('editarLocal')}}" class="btn btn-primary btn-sm"><i class="far fa-edit"></i> Editar Local</a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('addLocal')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Adicionar Local</a>
                        </li>

                    

                    </ul>
                

                </div>

            </div>


    </div>


    <div id="local02" class="mt-5">

        <h3 style="text-align: center;">Aqui você pode praticar:</h3>


        <ul class="nav flex row pl-5 pr-5" id="listaEsportes">
            <li class="row nav-item">

                <div class="mb-4 ml-4 mr-4">

                    <img width="75" class="" src="{{ asset('img/futsal.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Futsal</h6>
                </div>
            </li>


            <li class="row nav-item">

                <div class="mb-4 ml-4 mr-4">

                    <img width="75" class="" src="{{ asset('img/basket.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Basquete</h6>
                </div>
            </li>

            <li class="row nav-item">

                <div class="mb-4 ml-4 mr-4">

                    <img width="75" class="" src="{{ asset('img/volei.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Vôlei</h6>
                </div>
            </li>

            <li class="row nav-item">

                <div class="mb-4 ml-4 mr-4">

                    <img width="75" class="" src="{{ asset('img/handbol.png')}}" alt="">
                    <h6 class="mt-2" style="text-align: center;">Handebol</h6>
                </div>
            </li>



        </ul>
    </div>


    <div id="local03">


        <h3 style="text-align: center;">Atividades</h3>
    


        <ul class="list-unstyled">
            <li class="media my-4" style="background-color: black" ;>
                <img width="100px" src="{{ asset('img/quadra_ibirapuera.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                <div class="media-body mt-2 mr-3">
    
                    <p style="color: white;"><a href="{{ route('perfil') }}"><b>Manuela Fernandez</b></a> e outras <b>22</b> pessoas mostraram interesse em jogar
                        interesse em jogar
                        <b>Queimada</b> na <b>Quadra 01 do Parque do Ibirapuera</b>!</p>
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
                <img width="100px" src="{{ asset('img/quadra_ibirapuera.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                <div class="media-body mt-2 mr-3">
    
                    <p style="color: white;"><a href="{{ route('perfil') }}"><b>Augusto Marcondes</b></a> e outras <b>16</b> pessoas mostraram interesse em jogar
                        interesse em jogar
                        <b>basquete</b> na <b>Quadra 01 do Parque do Ibirapuera</b>!</p>
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
                <img width="100px" src="{{ asset('img/quadra_ibirapuera.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                <div class="media-body mt-2 mr-3">
                    
                    <p style="color: white;"><a href="{{ route('perfil') }}"><b>Ricardo Figueiredo</b></a> e outras <b>19</b> pessoas mostraram interesse em jogar
                        interesse em jogar
                        <b>vôlei</b> na <b>Quadra 01 do Parque do Ibirapuera</b>!</p>
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