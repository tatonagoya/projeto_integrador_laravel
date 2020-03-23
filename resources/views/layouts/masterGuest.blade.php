

    <!DOCTYPE html>
    <html lang="pt-br">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>@yield('title') - Outdoor Esportes</title>
            <link rel="shortcut icon" sizes="60x60" href="{{ asset('img/logo4f.png') }}">
            <link rel="icon" type="image/png" sizes="60x60" href="{{ asset('img/logo4f.png') }}">
            <script src="{{ asset('js/app.js') }}" defer></script>
            <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
            <link rel="dns-prefetch" href="//fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        </head>
        <header>

            <nav class="navbar navbar-dark ">
                <a class="navbar-brand" href="{{ route('index')}}">
                    <img src="{{ asset('img/logo4.png') }}" width="150" height="70" class="d-inline-block align-top" alt="">
                </a>


                <ul class="nav nav-pills nav-fill justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index')}}" style="font-size: 22px">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contato')}}" style="font-size: 22px">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register')}}" class="btn btn-primary btn-lg ml-5 mr-3">Criar Conta</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login')}}" class="btn btn-primary btn-lg">Entrar</a>
                    </li>




                    {{-- <li class="nav-item">

                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary btn-lg ml-5 mr-3" data-toggle="modal"
                            data-target="#ExemploModalCentralizado">
                            Criar Conta
                        </button>



                        <!-- Modal cadastre-se-->
                        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
                            aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Crie sua conta. É rapidinho!</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>


            
                                    <form method="POST" class="mt-3 mb-4" action="{{ route('editarPerfil') }}">
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
                    </li>

                    <li class="nav-item">

                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ExemploModalCentralizado1">
                            Entrar
                        </button>
                        <!-- Modal login-->
                        <div class="modal fade" id="ExemploModalCentralizado1" tabindex="-1" role="dialog"
                            aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">Insira e-mail e senha</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">



                                        <form method="POST" action="{{ route('feed') }}">
                                            @csrf
                    
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
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
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Lembrar de mim') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Entrar no Outdoor Esportes') }}
                                                    </button>
                    
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Esqueceu sua senha?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>






                                    </div>

                                </div>
                            </div>
                        </div>


                    </li> --}}
                </ul>



            </nav>

        </header>

        <body>

           <div>
            @yield('content2')
           </div>
        



           
        </body>
        
        <footer class="page-footer font-small special-color-dark pt-4">

            <!-- Footer Elements -->
            <div class="container">

                <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1">
                            <img src="https://img.icons8.com/color/48/000000/facebook-circled.png">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1">
                            <img src="https://img.icons8.com/color/48/000000/twitter.png">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-li mx-1">
                            <img src="https://img.icons8.com/color/48/000000/linkedin.png">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-dribbble mx-1">
                            <img src="https://img.icons8.com/color/48/000000/instagram-new.png">
                        </a>
                    </li>
                </ul>


            </div>

            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#"> Esportes Outdoor</a>
            </div>

        </footer>
    </html>

