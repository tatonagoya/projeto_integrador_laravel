@extends('layouts.masterGuest')

@section('title', 'Criar Conta')

@section('content2')

<section style="background-color: black;">

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center;">{{ __('Preencha os campos abaixo para criar a sua conta!') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Senha') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="bairro_user" class="col-md-4 col-form-label text-md-right">{{ __('Bairro') }}</label>

                                <div class="col-md-6">
                                    <input id="bairro_user" type="text" class="form-control" name="bairro_user" required autocomplete="bairro_user"
                                    class="form-control{{$errors->has('titulo') ? ' is-invalid':''}}" 
                                    value="{{ old('titulo') }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="local_trabalho" class="col-md-4 col-form-label text-md-right">{{ __('Local de Trabalho') }}</label>

                                <div class="col-md-6">
                                    <input id="local_trabalho" type="text" class="form-control" name="local_trabalho" required autocomplete="local_trabalho"
                                    class="form-control{{$errors->has('titulo') ? ' is-invalid':''}}" 
                                    value="{{ old('titulo') }}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="instituicao_ensino" class="col-md-4 col-form-label text-md-right">{{ __('Instituição de Ensino') }}</label>

                                <div class="col-md-6">
                                    <input id="instituicao_ensino" type="text" class="form-control" name="instituicao_ensino" required autocomplete="instituicao_ensino"
                                    class="form-control{{$errors->has('titulo') ? ' is-invalid':''}}" 
                                    value="{{ old('titulo') }}">
                                </div>
                            </div>

                            



                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Criar Conta') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
