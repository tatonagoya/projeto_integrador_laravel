@extends('layouts.masterGuest')

    @section('title', 'Início')

    @section('content2')

       

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" style="max-height: 85vh;" src="{{ asset('img/pessoasesportesok.jpg') }}" alt="Primeiro Slide">
                        <div class="carousel-caption d-none d-md-block" style="opacity: 0.7; background-color: black;">
                            <h5><b>Conecte-se praticando esportes</b></h5>
                            <p>Conheça pessoas e localidades conectadas na prática de esportes coletivos</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/futebolok.jpg') }}" style="max-height: 85vh;" alt="Segundo Slide">
                        <div class="carousel-caption d-none d-md-block" style="opacity: 0.7;background-color: black;">
                            <h5>Melhore suas habilidades</h5>
                            <p>Venha competir com os melhores na sua modalidade</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/xadrezok.jpg') }}" style="max-height: 85vh;" alt="Terceiro Slide">
                        <div class="carousel-caption d-none d-md-block" style="opacity: 0.7;background-color: black;">
                            <h5>Use sua mente</h5>
                            <p>Os melhores lugares para a prática de esportes individuais</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>

            </section>
            <section class="participe">
                <h1 class="center">Por que participar de <b> Esportes Outdoor</b>?</h1><br>
                <h2> Em nosso site, sua prática desportiva está no centro das atenções.</h2>
                <p><b> Esportes outdoor </b> é a rede social para aqueles que gostam de esportes individuais e coletivos em
                    locais públicos
                    gratuitos. Aqui você se conecta com pessoas que estão praticando esportes por lazer ou de forma competitiva.
                    Sua vida esportiva está no centro das atenções. Compartilhe suas opiniões e venha praticar esportes
                    conosco!.</p><br>
                <p><b>Esteja pronto para se apresentar à comunidade global de jogadores e treinadores reais.</b>
                </p>
            </section>

            <section class="features">
                <h1>O que <b>Esportes Outdoor</b> oferece? </h1>
                <div class="container1">
                    <div class="row">
                        <div class="col-sm" style="font-size: 4em;">
                            <img src="https://img.icons8.com/ultraviolet/80/000000/user.png">
                            <p style="font-size: 0.25em; margin: 1% 1% 10% 10% ;"><b>Um currículo esportivo único</b> <br> Seu
                                perfil é
                                sua identidade esportiva e sua fonte primeira de interação com os demais usuários</p>
                        </div>
                        <div class="col-sm" style="font-size: 4em;">
                            <img src="https://img.icons8.com/flat_round/64/000000/share--v1.png">
                            <p style="font-size: 0.25em; margin: 1% 1% 10% 10% ;"><b>Compartilhamento de informações</b> <br>
                                Fique sabendo e compartilhe informações sobre jogos e campeonatos</p>
                        </div>
                        <div class="col-sm" style="font-size: 4em;">
                            <img src="https://img.icons8.com/color/96/000000/basketball-field.png">
                            <p style="font-size: 0.25em; margin: 1% 1% 10% 10% ;"><b>Locais para praticar esportes</b> <br>
                                Conheça os melhores locais para praticar esportes gratuitamente</p>

                        </div>
                    </div>
                </div>
                <div class="container2">
                    <div class="row" style="font-size: 4em;">
                        <div class="col-sm">
                            <img src="https://img.icons8.com/flat_round/64/000000/bell.png">
                            <p style="font-size: 0.25em; margin: 1% 1% 5% 5% ;"><b>Notícias</b><br> Esteja sempre informado dos
                                acontecimentos esportivos</p>

                        </div>
                        <div class="col-sm">
                            <img src="https://img.icons8.com/officel/80/000000/trophy.png">
                            <p style="font-size: 0.25em; margin: 1% 1% 5% 5% ;"><b>Campeonatos</b> <br> Crie times e agende
                                competições entre seus amigos
                        </div>
                        <div class="col-sm">
                            <img src="https://img.icons8.com/flat_round/64/000000/info.png">
                            <p style="font-size: 0.25em; margin: 1% 1% 5% 5% ;"><b>Dicas</b> <br> Receba as melhores dicas para
                                se tornar fera nos esportes
                        </div>
                    </div>
                </div>

            </section>

            <section class="depoimentos">
                <h1 class="center">Encontre amigos, iniciantes e avançados, confira suas histórias e experiências:</h1><br>

                <div class="card-deck">
                    <div class="card" style="background-color: lightseagreen;">
                        <img class="card-img-top" src="{{ asset('img/Jordan.jpg') }}" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Michael Jordan</h5>
                            <p class="card-text">Por meio do <b>Esportes Outdoor</b> fiz amigos, dei dicas aos praticantes de
                                basquete e ainda orientei alguns campeonatos</p>
                        </div>
                        <div class="card-footer">
                            <small>De Chicago, EUA</small>
                        </div>
                    </div>
                    <div class="card" style="background-color: lightseagreen;">
                        <img class="card-img-top" src="{{ asset('img/profile1.jpeg') }}" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Ruth Gullit</h5>
                            <p class="card-text">Minha experiência no <b>Esportes Outdoor</b> foi muito marcante. Aqui encontrei
                                amigos, pratiquei esportes e pude competir em várias modalidades</p>
                        </div>
                        <div class="card-footer">
                            <small>De Amsterdan, NL</small>
                        </div>
                    </div>
                    <div class="card" style="background-color: lightseagreen;">
                        <img class="card-img-top" src="{{ asset('img/Kasparov.jpg') }}" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Gary Kasparov</h5>
                            <p class="card-text">Graças ao <b>Esportes Outdoor</b> pude ensinar os princípios do xadrez para
                                vários participantes interessados em aumentar suas habilidades</p>
                        </div>
                        <div class="card-footer">
                            <small>Enxadrista, ex-campeão mundial FIDE</small>
                        </div>
                    </div>
                </div>

            </section>

@endsection



    

     



