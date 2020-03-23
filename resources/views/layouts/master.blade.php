@guest
    <!DOCTYPE html>
    <html lang="en">
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
    
    
    
                                    <form method="GET" action="{{ route('home') }}">
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
    <body style="background-color: black;">
        <div class="container mt-5">
            <H2 class="mt-5" style="color: white; text-align: center;">Crie uma conta ou faça login para acessar essa página!</H2>
        </div>
    </body>
    </html>
@endguest


@auth
    
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



        <body class="flex container col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-color: black;">
            
            <header>

                <nav id="navPequeno" class="navbar navbar-dark">
                    <a class="navbar-brand" href="{{ route('home')}}">
                            <img src="{{ asset('img/logo4.png')}}" width="150" height="70" class="d-inline-block align-top" alt="">
                    </a>
                

                        
                    <div class="conteiner row">
                        <form class="form-inline my-2 my-sm-0">
                            <input class="form-control mr-sm-2 mr-2" type="search" placeholder="Procurar..." aria-label="Search">
                            <a href="{{ route('pesquisa')}}" class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></a>
                        </form>
                    </div>
            

                    

                    <ul class="nav nav-pills nav-fill justify-content-center nowrap">
                        <div class="container row nowrap">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}" style="font-size: 16px">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('listaLocais') }}" style="font-size: 16px">Locais</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('addPartida')}}" style="font-size: 16px">Jogar</a>
                            </li>


                        </div>
                        
                    
                        
                        <div class="conteiner my-2">
                            
                            <li class="nav-item">
                                <div class="pos-f-t">
                                    <div class="collapse" id="navbarToggleExternalContent">
                                        
                                        <section id="sectionPequeno" class="flex container card" style="background-color: lightseagreen;">

                                            <nav class="navbar navbar-dark bg-dark">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                            </nav>

                                            <div class="mt-4">
                            
                                                <img src="{{ asset('img/avatar_usuario.jpg')}}" class="card-img" alt="...">
                                                <div class="card-body">
                                                    <h6 class="card-title" style="color: black;"><b>Olá Roberta Nascimento</b></h6>
                                                    <p class="card-text" style="font-size: 12px; color: black;"><b>Bem-vinda ao Outdoor Esportes! Esse é um espaço para você se conectar com seus amigos 
                                                        e conhecer novas pessoas através do esporte! <br><br>Primeiro, selecione as atividades que deseja praticar, 
                                                        depois pesquise as pessoas e lugares que prefere seguir. Então é só receber as notificações em seu feed, 
                                                        escolher uma partida e começar a se exercitar!</b></p>
                                                    <a href="/editarPerfil/{$user->id}" class="btn btn-dark btn-block" style="font-size: 12px;"><i class="fas fa-address-card"></i> Editar Perfil</a>
                                                </div>
                            

                                                {{-- /editarPerfil/{{$local->id}} --}}
                            
                            
                                                <div>
                                                    <h6 style="text-align: center; padding: 5px; color: black;" class="mt-4">Selecione as atividades que você quer
                                                        praticar!</h6>
                                                </div>
                            
                            
                                                <div>
                                                                        
                                                        
                                                    <ul class="nav flex-column">
                                                        <li id="listaEsportes" class="row nav-item" style="color: black;">
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/futCampo.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                                    <label class="custom-control-label pt-1" for="customSwitch1"><strong>Futebol</strong></label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/futsal.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                                    <label class="custom-control-label pt-1" for="customSwitch2">Futsal</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/basket.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                                    <label class="custom-control-label pt-1" for="customSwitch3">Basquete</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/volei.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                                    <label class="custom-control-label pt-1" for="customSwitch4">Vôlei</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/handbol.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                                    <label class="custom-control-label pt-1" for="customSwitch5">Handebol</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/corrida.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                                                    <label class="custom-control-label pt-1" for="customSwitch6">Corrida</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/ciclismo.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                                                    <label class="custom-control-label pt-1" for="customSwitch7">Ciclismo</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/tenis.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                                                    <label class="custom-control-label pt-1" for="customSwitch8">Tênis</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/skate.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch9">
                                                                    <label class="custom-control-label pt-1" for="customSwitch9">Skate</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/capoeira.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch10">
                                                                    <label class="custom-control-label pt-1" for="customSwitch10"><strong>Capoeira</strong></label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/icon1.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch11">
                                                                    <label class="custom-control-label pt-1" for="customSwitch11">Futebol</label>
                                                                </div>
                                                            </div>
                        
                                                            <div class="mb-4 icone">
                                                                <img width="65" class="" src="{{ asset('img/icon1.png')}}" alt="">
                                                                <div class="custom-control custom-switch mt-2">
                                                                    <input type="checkbox" class="custom-control-input" id="customSwitch12">
                                                                    <label class="custom-control-label pt-1" for="customSwitch12">Futebol</label>
                                                                </div>
                                                            </div>
                        
                                                        </li>
                                                    </ul>


                                                </div>
                            
                            
                            
                            

                                            </div>
                            
                                            <footer>

                                                <div>
                                                    <nav class="navbar navbar-expand-md navbar-light bg-light">
                                                        <ul id="listaFooter" class="nav col-md-12 col-lg-12 col-xl-12">
                    
                    
                    
                    
                                                            <li class="nav-item">
                                                                <button type="button" class="btn btn-link" id="button1" data-toggle="modal"
                                                                    data-target="#ExemploModalCentralizado">
                                                                    Privacidade
                                                                </button>
                                                                <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
                                                                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="TituloModalCentralizado">Privacidade
                                                                                </h5>
                                                                                <button type="button" class="close" data-dismiss="modal"
                                                                                    aria-label="Fechar">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p style="text-align: justify;">Informações e conteúdo que você fornece. Coletamos o conteúdo,
                                                                                    comunicações e outras informações que você fornece quando usa
                                                                                    nossos
                                                                                    Produtos, inclusive quando você se cadastra para criar uma
                                                                                    conta,
                                                                                    cria
                                                                                    ou compartilha conteúdo, envia mensagens ou se comunica com
                                                                                    outras
                                                                                    pessoas. Isso pode incluir informações presentes ou sobre o
                                                                                    conteúdo
                                                                                    que
                                                                                    você fornece (como metadados), como a localização de uma foto ou
                                                                                    a
                                                                                    data
                                                                                    em que um arquivo foi criado.<br><br>Isso pode incluir também o que
                                                                                    você vê
                                                                                    por
                                                                                    meio dos recursos que fornecemos, como nossa câmera, de modo que
                                                                                    possamos realizar ações como sugerir máscaras e filtros de que
                                                                                    você
                                                                                    pode
                                                                                    gostar, ou dar dicas sobre o uso de formatos da câmera. Nossos
                                                                                    sistemas
                                                                                    processam automaticamente o conteúdo e as comunicações que você
                                                                                    e
                                                                                    outras
                                                                                    pessoas fornecem a fim de analisar o contexto e o conteúdo
                                                                                    incluído
                                                                                    nesses itens para as finalidades descritas abaixo. Saiba mais
                                                                                    sobre
                                                                                    como
                                                                                    controlar quem pode ver o conteúdo que você compartilha.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-dismiss="modal">Fechar</button>
                                                                            </div>
                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                    
                    
                                                            <li class="nav-item">
                                                                <button type="button" class="btn btn-link" id="button1" data-toggle="modal"
                                                                    data-target="#ExemploModalCentralizado1">
                                                                    Termos de Uso
                                                                </button>
                                                                <div class="modal fade" id="ExemploModalCentralizado1" tabindex="-1" role="dialog"
                                                                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="TituloModalCentralizado">Termos de Uso
                                                                                </h5>
                                                                                <button type="button" class="close" data-dismiss="modal"
                                                                                    aria-label="Fechar">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p style="text-align: justify;">Bem-vindos ao Facebook! O Facebook cria tecnologias e serviços
                                                                                    para
                                                                                    que
                                                                                    as pessoas possam se conectar umas às outras, criar comunidades
                                                                                    e
                                                                                    expandir seus negócios. Estes Termos regem seu uso do Facebook,
                                                                                    Messenger e outros produtos, recursos, aplicativos, serviços,
                                                                                    tecnologias e software que oferecemos (os Produtos do Facebook
                                                                                    ou
                                                                                    Produtos), exceto quando declaramos expressamente que outros
                                                                                    termos
                                                                                    (e
                                                                                    não estes) se aplicam. Estes Produtos são fornecidos para você
                                                                                    pelo
                                                                                    Facebook, Inc. Não cobramos pelo uso do Facebook ou de outros
                                                                                    produtos e
                                                                                    serviços cobertos pelos Termos. Em vez disso, empresas e
                                                                                    organizações
                                                                                    nos pagam para lhe mostrar anúncios de seus produtos e serviços.
                                                                                    <br><br>Quando
                                                                                    você usa nossos Produtos, concorda que podemos mostrar anúncios
                                                                                    que
                                                                                    consideramos relevantes para você e seus interesses. Usamos seus
                                                                                    dados
                                                                                    pessoais para ajudar a determinar quais anúncios mostrar. Não
                                                                                    vendemos
                                                                                    seus dados pessoais para anunciantes e não compartilhamos
                                                                                    informações de
                                                                                    identificação pessoal (como nome, endereço de email ou outras
                                                                                    informações de contato) com os anunciantes, a menos que tenhamos
                                                                                    permissão específica. Em vez disso, os anunciantes nos informam
                                                                                    os
                                                                                    tipos
                                                                                    de público que desejam que vejam os anúncios, e nós mostramos
                                                                                    esses
                                                                                    anúncios para pessoas que podem estar interessadas.<br><br>Oferecemos
                                                                                    aos
                                                                                    anunciantes relatórios sobre o desempenho dos anúncios para
                                                                                    ajudá-los a
                                                                                    entender como as pessoas estão interagindo com o conteúdo. Veja
                                                                                    a
                                                                                    Seção
                                                                                    2 abaixo para saber mais. Nossa Política de Dados explica como
                                                                                    coletamos
                                                                                    e usamos seus dados pessoais para determinar alguns dos anúncios
                                                                                    que
                                                                                    serão exibidos e fornecer todos os outros serviços descritos
                                                                                    abaixo.
                                                                                    Você também pode ir para as suas Configurações a qualquer
                                                                                    momento
                                                                                    para
                                                                                    analisar as escolhas de privacidade sobre como usamos seus
                                                                                    dados.
                                                                                </p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-dismiss="modal">Fechar</button>
                                                                            </div>
                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>                
                    
                    
                    
                                                            <li class="nav-item">
                                                                <button type="button" class="btn btn-link" id="button1" data-toggle="modal"
                                                                    data-target="#ExemploModalCentralizado2">
                                                                    Anúncios
                                                                </button>
                                                                <div class="modal fade" id="ExemploModalCentralizado2" tabindex="-1" role="dialog"
                                                                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="TituloModalCentralizado">Anúncios</h5>
                                                                                <button type="button" class="close" data-dismiss="modal"
                                                                                    aria-label="Fechar">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Quer anunciar sua empresa ou marca no <strong>Outdoor Esportes</strong>?<br><br>
                                                                                    Então entre em contato pelo nosso E-Mail <br><i class="far fa-envelope-open"></i> 
                                                                                    marketing@outdooresportes.com.br <br>ou pelo WhatsApp <i class="fab fa-whatsapp"></i> 11 99999-9999</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-dismiss="modal">Fechar</button>
                                                                            </div>
                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                    
                    
                                                            <li class="nav-item">
                                                                <button type="button" class="btn btn-link" id="button1" data-toggle="modal"
                                                                    data-target="#ExemploModalCentralizado3">
                                                                    Cookies
                                                                </button>
                                                                <div class="modal fade" id="ExemploModalCentralizado3" tabindex="-1" role="dialog"
                                                                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="TituloModalCentralizado">Cookies</h5>
                                                                                <button type="button" class="close" data-dismiss="modal"
                                                                                    aria-label="Fechar">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p style="text-align: justify;">Cookies são pequenos trechos de texto usados para armazenar
                                                                                    informações
                                                                                    em navegadores da Web. Os cookies são usados para armazenar e
                                                                                    receber
                                                                                    identificadores e outras informações em computadores, telefones
                                                                                    e
                                                                                    outros
                                                                                    dispositivos. Outras tecnologias, inclusive os dados que
                                                                                    armazenamos
                                                                                    em
                                                                                    seu navegador ou dispositivo, identificadores associados ao seu
                                                                                    dispositivo e outros software, são usados com finalidades
                                                                                    semelhantes.
                                                                                    <br><br>Nesta política, chamamos todas essas tecnologias de “cookies”.
                                                                                    Se
                                                                                    você
                                                                                    tem uma conta do Facebook, usa os Produtos do Facebook,
                                                                                    inclusive
                                                                                    nossos
                                                                                    sites e aplicativos, ou visita outros sites e aplicativos que
                                                                                    usam
                                                                                    os
                                                                                    Produtos do Facebook (inclusive o botão Curtir ou outras
                                                                                    Tecnologias
                                                                                    do
                                                                                    Facebook), saiba que usamos cookies. Os cookies permitem que o
                                                                                    Facebook
                                                                                    lhe ofereça nossos Produtos e entenda as informações que
                                                                                    recebemos
                                                                                    sobre
                                                                                    você, como informações sobre seu uso de outros sites e
                                                                                    aplicativos,
                                                                                    ou
                                                                                    se você está cadastrado ou conectado.<br><br>Esta política explica como
                                                                                    usamos
                                                                                    os cookies e as escolhas que você tem. Salvo disposições em
                                                                                    contrário
                                                                                    indicadas nesta política, a Política de Dados será aplicada ao
                                                                                    processamento de dados coletados por meio de cookies.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary"
                                                                                    data-dismiss="modal">Fechar</button>
                                                                            </div>
                    
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                    
                
                    
                    
                                                            <li>
                                                                <div id="cp" class="flex container center footer-copyright text-center py-2 mt-3">©
                                                                    2020
                                                                    Copyright:
                                                                    <a style="color: black;" href="#"> Esportes Outdoor</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                                
                                            </footer>
                            
                            
                                        </section>
                                        
                                    </div>

                                    <nav class="navbar navbar-dark bg-dark justify-content-center">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                    </nav>
                                </div>
                                
                            </li>
                    
                            <li>
                                <a class="badge badge-primary" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Sair da Sessão') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        </div>
                        
                    </ul>





                </nav>


                <nav id="navMedio" class="navbar navbar-dark mb-3">
                    <a class="navbar-brand" href="{{ route('home')}}">
                        <img src="{{ asset('img/logo4.png')}}" class="d-inline-block align-top" alt="">
                    </a>
                    <ul class="nav nav-pills nav-fill justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listaLocais') }}">Locais</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('addPartida')}}">Jogar</a>
                        </li>
                    
                        <li><div class="mx-5">
                            <form class="form-inline my-2 my-sm-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Procurar..." aria-label="Search">
                                <a href="{{ route('pesquisa')}}" class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></a>
                            </form>
                        </div></li>

                        <li>
                            <a class="badge badge-primary" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Sair da Sessão') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>


                <nav id="navGrande" class="navbar navbar-dark mb-3">
                    <a class="navbar-brand" href="{{ route('home')}}">
                        <img src="{{ asset('img/logo4.png')}}" class="d-inline-block align-top" alt="">
                    </a>
                    <ul class="nav nav-pills nav-fill justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('listaLocais') }}">Locais</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('addPartida')}}">Jogar</a>
                        </li>
                    
                        <li><div class="mx-5">
                            <form class="form-inline my-2 my-sm-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Procurar..." aria-label="Search">
                                <a href="{{ route('pesquisa')}}" class="btn btn-outline-info my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></a>
                            </form>
                        </div></li>

                        <li>
                                    <a class="badge badge-primary" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Sair da Sessão') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>

                    </ul>
                </nav>

            </header>

            


            <main class="flex container col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style="background-color: black;">
                
                <div class="row">

                    <section id="sectionGrande" class="flex container card col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4" style="background-color: lightseagreen;"> 

                        <div>

                            <img src="{{ asset('img/avatar_usuario.jpg')}}" class="card-img" alt="...">
                            <div class="card-body">
                                <h3 class="card-title" style="text-align: center;">Olá <b>Roberta Nascimento</b></h3>
                                <p class="card-text mt-1" style="color: black; text-align: center;"><b>Bem-vinda ao Outdoor Esportes! Esse é um espaço para você se conectar com seus amigos 
                                    e conhecer novas pessoas através do esporte! <br><br>Primeiro, selecione as atividades que deseja praticar, 
                                    depois pesquise as pessoas e lugares que prefere seguir. Então é só receber as notificações em seu feed, 
                                    escolher uma partida e começar a se exercitar!</b></p>
                                <a href="/editarPerfil/{{Auth::user()->id}}" class="btn btn-dark btn-block"><i class="fas fa-address-card"></i> Editar Perfil</a>
                            </div>

                            {{-- /editarPerfil/{$user->id} --}}
                            {{-- /editarPerfil/{{$local->id}} --}}


                            <div>
                                <h4 style="text-align: center; padding: 5px;" class="mt-4">Selecione as atividades que você quer
                                    praticar!</h4>
                            </div>


                            <div>
                                <ul class="nav flex-column">
                                    <li id="listaEsportes" class="row nav-item">

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/futCampo.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                <label class="custom-control-label" for="customSwitch1">Futebol</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/futsal.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                                <label class="custom-control-label" for="customSwitch2">Futsal</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/basket.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                                <label class="custom-control-label" for="customSwitch3">Basquete</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/volei.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                                <label class="custom-control-label" for="customSwitch4">Vôlei</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/handbol.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                                <label class="custom-control-label" for="customSwitch5">Handebol</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/corrida.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                                <label class="custom-control-label" for="customSwitch6">Corrida</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/ciclismo.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch7">
                                                <label class="custom-control-label" for="customSwitch7">Ciclismo</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/tenis.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch8">
                                                <label class="custom-control-label" for="customSwitch8">Tênis</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/skate.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch9">
                                                <label class="custom-control-label" for="customSwitch9">Skate</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/capoeira.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch10">
                                                <label class="custom-control-label" for="customSwitch10">Capoeira</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/icon1.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch11">
                                                <label class="custom-control-label" for="customSwitch11">Futebol</label>
                                            </div>
                                        </div>

                                        <div class="mb-4 icone">
                                            <img class="" src="{{ asset('img/icon1.png')}}" alt="">
                                            <div class="custom-control custom-switch mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customSwitch11">
                                                <label class="custom-control-label" for="customSwitch12">Futebol</label>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>

                            <footer>

                                <div>
                                    <nav class="navbar navbar-expand-md navbar-light bg-light">
                                        <ul id="listaFooter" class="nav nowrap col-md-12 col-lg-12 col-xl-12">




                                            <li class="nav-item">
                                                <button type="button" class="btn btn-link" id="button1" data-toggle="modal"
                                                    data-target="#ExemploModalCentralizado7">
                                                    Privacidade
                                                </button>
                                                <div class="modal fade" id="ExemploModalCentralizado7" tabindex="-1" role="dialog"
                                                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="TituloModalCentralizado">Privacidade
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p style="text-align: justify;">Informações e conteúdo que você fornece. Coletamos o conteúdo,
                                                                    comunicações e outras informações que você fornece quando usa
                                                                    nossos
                                                                    Produtos, inclusive quando você se cadastra para criar uma
                                                                    conta,
                                                                    cria
                                                                    ou compartilha conteúdo, envia mensagens ou se comunica com
                                                                    outras
                                                                    pessoas. Isso pode incluir informações presentes ou sobre o
                                                                    conteúdo
                                                                    que
                                                                    você fornece (como metadados), como a localização de uma foto ou
                                                                    a
                                                                    data
                                                                    em que um arquivo foi criado.<br><br>Isso pode incluir também o que
                                                                    você vê
                                                                    por
                                                                    meio dos recursos que fornecemos, como nossa câmera, de modo que
                                                                    possamos realizar ações como sugerir máscaras e filtros de que
                                                                    você
                                                                    pode
                                                                    gostar, ou dar dicas sobre o uso de formatos da câmera. Nossos
                                                                    sistemas
                                                                    processam automaticamente o conteúdo e as comunicações que você
                                                                    e
                                                                    outras
                                                                    pessoas fornecem a fim de analisar o contexto e o conteúdo
                                                                    incluído
                                                                    nesses itens para as finalidades descritas abaixo. Saiba mais
                                                                    sobre
                                                                    como
                                                                    controlar quem pode ver o conteúdo que você compartilha.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>



                                            <li class="nav-item">
                                                <button type="button" class="btn btn-link" id="button1" data-toggle="modal"
                                                    data-target="#ExemploModalCentralizado8">
                                                    Termos de Uso
                                                </button>
                                                <div class="modal fade" id="ExemploModalCentralizado8" tabindex="-1" role="dialog"
                                                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="TituloModalCentralizado">Termos de Uso
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p style="text-align: justify;">Bem-vindos ao Facebook! O Facebook cria tecnologias e serviços
                                                                    para
                                                                    que
                                                                    as pessoas possam se conectar umas às outras, criar comunidades
                                                                    e
                                                                    expandir seus negócios. Estes Termos regem seu uso do Facebook,
                                                                    Messenger e outros produtos, recursos, aplicativos, serviços,
                                                                    tecnologias e software que oferecemos (os Produtos do Facebook
                                                                    ou
                                                                    Produtos), exceto quando declaramos expressamente que outros
                                                                    termos
                                                                    (e
                                                                    não estes) se aplicam. Estes Produtos são fornecidos para você
                                                                    pelo
                                                                    Facebook, Inc. Não cobramos pelo uso do Facebook ou de outros
                                                                    produtos e
                                                                    serviços cobertos pelos Termos. Em vez disso, empresas e
                                                                    organizações
                                                                    nos pagam para lhe mostrar anúncios de seus produtos e serviços.
                                                                    <br><br>Quando
                                                                    você usa nossos Produtos, concorda que podemos mostrar anúncios
                                                                    que
                                                                    consideramos relevantes para você e seus interesses. Usamos seus
                                                                    dados
                                                                    pessoais para ajudar a determinar quais anúncios mostrar. Não
                                                                    vendemos
                                                                    seus dados pessoais para anunciantes e não compartilhamos
                                                                    informações de
                                                                    identificação pessoal (como nome, endereço de email ou outras
                                                                    informações de contato) com os anunciantes, a menos que tenhamos
                                                                    permissão específica. Em vez disso, os anunciantes nos informam
                                                                    os
                                                                    tipos
                                                                    de público que desejam que vejam os anúncios, e nós mostramos
                                                                    esses
                                                                    anúncios para pessoas que podem estar interessadas.<br><br>Oferecemos
                                                                    aos
                                                                    anunciantes relatórios sobre o desempenho dos anúncios para
                                                                    ajudá-los a
                                                                    entender como as pessoas estão interagindo com o conteúdo. Veja
                                                                    a
                                                                    Seção
                                                                    2 abaixo para saber mais. Nossa Política de Dados explica como
                                                                    coletamos
                                                                    e usamos seus dados pessoais para determinar alguns dos anúncios
                                                                    que
                                                                    serão exibidos e fornecer todos os outros serviços descritos
                                                                    abaixo.
                                                                    Você também pode ir para as suas Configurações a qualquer
                                                                    momento
                                                                    para
                                                                    analisar as escolhas de privacidade sobre como usamos seus
                                                                    dados.
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>



                                            <li class="nav-item">
                                                <button type="button" class="btn btn-link" id="button1" data-toggle="modal"
                                                    data-target="#ExemploModalCentralizado9">
                                                    Anúncios
                                                </button>
                                                <div class="modal fade" id="ExemploModalCentralizado9" tabindex="-1" role="dialog"
                                                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="TituloModalCentralizado">Anúncios</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Quer anunciar sua empresa ou marca no <strong>Outdoor Esportes</strong>?<br><br>
                                                                    Então entre em contato pelo nosso E-Mail <br><i class="far fa-envelope-open"></i> 
                                                                    marketing@outdooresportes.com.br <br>ou pelo WhatsApp <i class="fab fa-whatsapp"></i> 11 99999-9999</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>



                                            <li class="nav-item">
                                                <button type="button" class="btn btn-link" id="button1" data-toggle="modal"
                                                    data-target="#ExemploModalCentralizado10">
                                                    Cookies
                                                </button>
                                                <div class="modal fade" id="ExemploModalCentralizado10" tabindex="-1" role="dialog"
                                                    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="TituloModalCentralizado">Cookies</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Fechar">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p style="text-align: justify;">Cookies são pequenos trechos de texto usados para armazenar
                                                                    informações
                                                                    em navegadores da Web. Os cookies são usados para armazenar e
                                                                    receber
                                                                    identificadores e outras informações em computadores, telefones
                                                                    e
                                                                    outros
                                                                    dispositivos. Outras tecnologias, inclusive os dados que
                                                                    armazenamos
                                                                    em
                                                                    seu navegador ou dispositivo, identificadores associados ao seu
                                                                    dispositivo e outros software, são usados com finalidades
                                                                    semelhantes.
                                                                    <br><br>Nesta política, chamamos todas essas tecnologias de “cookies”.
                                                                    Se
                                                                    você
                                                                    tem uma conta do Facebook, usa os Produtos do Facebook,
                                                                    inclusive
                                                                    nossos
                                                                    sites e aplicativos, ou visita outros sites e aplicativos que
                                                                    usam
                                                                    os
                                                                    Produtos do Facebook (inclusive o botão Curtir ou outras
                                                                    Tecnologias
                                                                    do
                                                                    Facebook), saiba que usamos cookies. Os cookies permitem que o
                                                                    Facebook
                                                                    lhe ofereça nossos Produtos e entenda as informações que
                                                                    recebemos
                                                                    sobre
                                                                    você, como informações sobre seu uso de outros sites e
                                                                    aplicativos,
                                                                    ou
                                                                    se você está cadastrado ou conectado.<br><br>Esta política explica como
                                                                    usamos
                                                                    os cookies e as escolhas que você tem. Salvo disposições em
                                                                    contrário
                                                                    indicadas nesta política, a Política de Dados será aplicada ao
                                                                    processamento de dados coletados por meio de cookies.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Fechar</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>




                                            <li>
                                                <div id="cp" class="flex container center footer-copyright text-center py-2 mt-3">©
                                                    2020
                                                    Copyright:
                                                    <a style="color: black;" href="#"> Esportes Outdoor</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                
                            </footer>

                        </div>


                    </section>


                    <section class="flex container col-xs-7 col-sm-7 col-md-7 col-lg-7 col-xl-7" style="background-color: lightseagreen; border-radius: 0.25rem;">
                        @yield('content')
                    </section>


                </div>

            </main>




        </body>

    </html>

@endauth
