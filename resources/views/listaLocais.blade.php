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
                        <img width="100px" src="{{$local->imagem_image}}" class="mt-3 mb-3 ml-3 mr-3" alt="...">
                        <div class="media-body mt-2 mr-3">
                            <h3><a href="/local/{{$local->id}}" class="mt-0 mb-1">{{$local->nome_local}}</a></h3>
                            <p style="color: white;">Bairro: {{$local->bairro}} <br> Endereço: {{$local->endereco}}</p>
                                <ul class="list-unstyled container row" style="color: white;">
                                 
                                   
                                    <li class="mr-3">
                                        <h5><a href="#" class="badge badge-success"><i class="fas fa-star"></i> Seguir</a></h5>
                                    </li>
                                    <li class="mr-3">
                                        <h5><a href="/editarLocal/{{$local->id}}" class="badge badge-info"><i class="far fa-edit"></i> Editar</a></h5>
                              
                                    </li>   


                                    <li class="mr-3">
                                        
                                        <h5><a href="#" class="badge badge-danger" data-toggle="modal" data-target="#modal{{ $local->id }}">
                                            <i class="fas fa-trash"></i> Apagar
                                        </a></h5>
                                        <div class="modal fade" id="modal{{ $local->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Deseja excluir o local {{ $local->nome_local }} ?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Bairro: {{$local->bairro}} <br> Endereço: {{$local->endereco}}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                        <form action="/exclui-local/{{ $local->id }}" method="POST">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="btn btn-danger">Excluir</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    
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