@extends('layouts.master')

@section('title', 'Resultado da Pesquisa')

@section('content')

    <div id="pesquisaGrande" class="row flex-column">

        <ul id="" class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="120px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 12px">Futebol</li>
                                <li style="font-size: 12px">Vôlei</li>
                                <li style="font-size: 12px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <h5><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h5>
            </li>
            
            
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="120px" src="{{ asset ('img/quadra_ibirapuera.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Quadra Poliesportiva da Escola Estadual Manuela Lacerda Vergueiro</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Praticáveis:
                            <ul class="list-unstyled">
                                <li style="font-size: 12px">Futebol</li>
                                <li style="font-size: 12px">Vôlei</li>
                                <li style="font-size: 12px">Handebol</li>
                                <li style="font-size: 12px">Handebol</li>
                                <li style="font-size: 12px">Handebol</li>
                                <li style="font-size: 12px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: São João Climaco</p>
                    </li>
                    <li>
                        <p style="color: black;">Endereço: Rua Tamuatá, 176</p>
                    </li>
                </ul>
                <h5><a href="#" class="badge badge-primary"><i class="fas fa-user-plus"></i> Seguir</a></h5>
            </li>


            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="120px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 12px">Futebol</li>
                                <li style="font-size: 12px">Vôlei</li>
                                <li style="font-size: 12px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <h5><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h5>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="120px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 12px">Futebol</li>
                                <li style="font-size: 12px">Vôlei</li>
                                <li style="font-size: 12px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <h5><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h5>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="120px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 12px">Futebol</li>
                                <li style="font-size: 12px">Vôlei</li>
                                <li style="font-size: 12px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <h5><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h5>
            </li>


        </ul>

    </div>


    <div id="pesquisaMedio" class="row flex-column">

        <ul id="" class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="75px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <h6><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h6>
            </li>
            
            
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="75px" src="{{ asset ('img/quadra_ibirapuera.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Quadra Poliesportiva da Escola Estadual Manuela Lacerda Vergueiro</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Praticáveis:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                                <li style="font-size: 10px">Handebol</li>
                                <li style="font-size: 10px">Handebol</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: São João Climaco</p>
                    </li>
                    <li>
                        <p style="color: black;">Endereço: Rua Tamuatá, 176</p>
                    </li>
                </ul>
                <h6><a href="#" class="badge badge-primary"><i class="fas fa-user-plus"></i> Seguir</a></h6>
            </li>


            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="75px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <h6><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h6>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="75px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <h6><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h6>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="75px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <h6><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></h6>
            </li>


        </ul>

    </div>


    <div id="pesquisaPequeno" class="row flex-column">

        <ul id="" class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="65px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <p style="font-size:11px"><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></P>
            </li>
            
            
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="65px" src="{{ asset ('img/quadra_ibirapuera.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Quadra Poliesportiva da Escola Estadual Manuela Lacerda Vergueiro</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Praticáveis:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                                <li style="font-size: 10px">Handebol</li>
                                <li style="font-size: 10px">Handebol</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: São João Climaco</p>
                    </li>
                    <li>
                        <p style="color: black;">Endereço: Rua Tamuatá, 176</p>
                    </li>
                </ul>
                <p style="font-size:11px"><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></P>
            </li>


            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="65px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <p style="font-size:11px"><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></P>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="65px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <p style="font-size:11px"><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></P>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('perfil') }}"><img width="65px" src="{{ asset ('img/avatar1.jpg')}}" class="mt-3 mb-3" alt="..."></a>
                <ul class="list-unstyled mt-3 container flex-start">
                    <li>
                        <p><a href="{{ route('perfil') }}" style="color: black;"><b>Manuela Fernandez</b></a></p>
                    </li>
                    <li>
                        <p class="mb-1" style="color: black;">Esportes Preferidos:
                            <ul class="list-unstyled">
                                <li style="font-size: 10px">Futebol</li>
                                <li style="font-size: 10px">Vôlei</li>
                                <li style="font-size: 10px">Handebol</li>
                            </ul>             
                        </p>
                    </li>
                    <li>
                        <p style="color: black;">Bairo: Perdizes</p>
                    </li>
                </ul>
                <p style="font-size:11px"><a href="#" class="badge badge-primary"><i class="fas fa-user-minus"></i> Deixar de Seguir</a></P>
            </li>


        </ul>

    </div>

@endsection