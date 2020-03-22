@extends('layouts.master')

@section('title', 'Locais')

@section('content')

    @if($locais->isEmpty())

    <a href="{{ route('addLocal')}}" class="btn btn-primary btn-lg mb-5"><i class="fas fa-plus"></i> Adicionar Local</a>
        <div class="col-12">
            <h1 class="col-12 text-center">Nenhum Local Cadastrado!</h1>
        </div>

        @else




        
            
        <div id="local03">


            <a href="{{ route('addLocal')}}" class="btn btn-primary btn-lg mb-5"><i class="fas fa-plus"></i> Adicionar Local</a>
            <h2 style="text-align: center;">Locais Cadastrados</h2>
        
            @foreach($locais as $local)

                <ul class="list-unstyled">
                    <li class="media my-4" style="background-color: black" ;>
                        <img width="100px" src="{{$local->imagem}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                        <div class="media-body mt-2 mr-3">
                            <h3><a href="/local/{{$local->id}}" class="mt-0 mb-1">{{$local->nome_local}}</a></h3>
                            <p style="color: white;">Bairro: {{$local->bairro}} <br> Endereço: {{$local->endereco}}</p>
                                <ul class="list-unstyled container row" style="color: white;">
                                 
                                   
                                    <li class="mr-3">
                                        <h5><a href="#" class="badge badge-success"><i class="fas fa-star"></i> Seguir</a></h5>
                                    </li>
                                    <li>
                                        <h5><a href="/editarLocal/{{$local->id}}" class="badge badge-info"><i class="fas fa-share"></i> Editar</a></h5>

                                        {{-- <a href="/editarLocal/{{$local->id}}">
                                            <i class="fas fa-edit"></i>
                                        </a>     --}}


                                    </li>   
                                </ul>
                        </div>
                    </li>
                </ul>    
            @endforeach     
        </div>    




            


                
            


                    {{-- <ul class="container row list-unstyled" id="local03">
                        <li class="media my-4" style="background-color: black" ;>
                            <img width="100px" src="{{ asset('img/quadra_ibirapuera.jpg')}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                            <div class="media-body mt-2 mr-3">
                                <h5 class="mt-0 mb-1">{{$local->nome_local}}</h5>
                                <p style="color: white;">Bairro: {{$local->bairro}} <br> Endereço: {{$local->endereco}}</p>
                                <a href="/editarLocal/{{$local->id}}">
                                    <i class="fas fa-edit"></i>
                                </a>    
                            </div>
                        </li>
                    </ul> --}}




            



            

    @endif











           









        
            

    





@endsection