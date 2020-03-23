@extends('layouts.master')

@section('title', 'Adicionar Local')

@section('content')

    <div id="addLocal" class="row flex-column">

        <h2 style="text-align: center">Preencha os campos para cadastrar um novo local!</h2>
        
        
        
        <form class="center mt-4" method="POST" action="/addLocal" enctype="multipart/form-data">
            @csrf
            {{ method_field('POST') }}


            <div class="form-group">
                <label for="nome_local" style="font-size: 18px;">Nome do Local</label>
                <input type="text" name="nome_local" class="form-control{{$errors->has('titulo') ? ' is-invalid':''}}" 
                    value="{{ old('titulo') }}" id="nome_local" placeholder="">
                <div class="invalid-feedback">{{ $errors->first('nome_local') }}</div>
            </div>

            <div class="form-group">
                <label for="bairro" style="font-size: 18px">Bairro</label>
                <input type="text" name="bairro" class="form-control{{$errors->has('titulo') ? ' is-invalid':''}}" 
                    value="{{ old('titulo') }}" id="bairro" placeholder="">
                <div class="invalid-feedback">{{ $errors->first('bairro') }}</div>
            </div>

            <div class="form-group">
                <label for="endereco" style="font-size: 18px">Endereço</label>
                <input type="text" name="endereco" class="form-control{{$errors->has('titulo') ? ' is-invalid':''}}" 
                    value="{{ old('titulo') }}" id="endereco" placeholder="">
                <div class="invalid-feedback">{{ $errors->first('endereco') }}</div>
            </div>

            
            
            <div class="form-group col-md-6 col-sm-12">
                <label for="imagem">Alterar Foto do Local</label>
                <input type="file" name="imagem" class="form-control" id="imagem">
            </div>




                {{-- <div class="form-group mt-5">
                  <label for="exampleFormControlFile1">Adicionar Imagem</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            
             --}}
            

            <div>

                <h3 class="mt-5 mb-3" style="text-align: center">Selecione os esportes praticáveis no local</h3>

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




            <button type="submit" class="form-control btn btn-dark btn-block">Adicionar</button>
        </form>






    </div>



@endsection