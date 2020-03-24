@extends('layouts.master')

@section('title', 'Feed')

@section('content')
            
    
    @foreach($perfis as $perfil)


        <ul id="feed" class="list-unstyled">
            <li class="media" style="background-color: black" ;>
                <img width="100px" src="{{$perfil->imagem_image}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                <div class="media-body mt-2 mr-3">

                    <p style="color: white;"><a href="/perfil/{{$perfil->id}}"><b>{{$perfil->name}}</b></a> mostrou interesse em jogar
                    <b>futebol</b> na <a href=
                    
                    "#">
                    
                    {{-- "/local/{{$local->id}}"> --}}
                    
                    <b>Quadra 01 do Parque do Ibirapuera</b>!</a></p>
                    </p>
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



            {{-- <li class="media my-4" style="background-color: black" ;>
                    <img width="100px" src="{{ asset ('img/avatar2.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                    <div class="media-body mt-2 mr-3">

                        <p style="color: white;"><a href="{{ route('perfil') }}"><b>Augusto Marcondes</b></a> mostrou interesse em jogar
                        <b>futebol</b> na <a href="{{ route('listaLocais') }}"><b>Quadra Poliesportiva Manuel de Barros</b>!</a></p>
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
                </li> --}}



                {{-- <li class="media my-4" style="background-color: black" ;>
                    <img width="100px" src="{{ asset ('img/avatar3.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                    <div class="media-body mt-2 mr-3">

                        <p style="color: white;"><a href="{{ route('perfil') }}"><b>Ricardo Figueiredo</b></a> mostrou interesse em jogar
                        <b>futebol</b> na <a href="{{ route('listaLocais') }}"><b>Praça do Por do Sol</b>!</a></p>
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
                </li> --}}

            


            




        </ul>

    @endforeach


            
@endsection