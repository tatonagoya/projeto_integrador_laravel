@extends('layouts.masterGuest')

    @section('title', 'Contato')

    @section('content2')

            <section class="contact-text">
                <h1>Contate-nos! </h1>
                <p>Basta preencher rapidamente o formulário abaixo</p>
            </section>

            <section class="form-contato">
                <div class="container justify-content-sm-start align-items-start">
                    <div class="row">
                        <div class="col-sm">
                            <img src="assets/img/logo4w.png" alt="" height="90%" width="90%" style="opacity: 0.2;">
                        </div>
                        <div class="col-sm">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputNome">Nome</label>
                                        <input type="nome" class="form-control" id="inputNome" placeholder="Nome">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputSobrenome">Sobrenome</label>
                                        <input type="nome" class="form-control" id="inputSobrenome" placeholder="Sobrenome">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>


                                <div class="form-group">
                                    <label for="inputAddress">Endereço</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Rua dos Bobos, nº 0">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Cidade</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEstado">Estado</label>
                                        <select id="inputEstado" class="form-control">
                                            <option selected>Escolher...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputCEP">CEP</label>
                                        <input type="text" class="form-control" id="inputCEP">
                                    </div>

                                    
                                </div>
                                <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Sua mensagem</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"></textarea>
                                    </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Concordo com os termos de uso do site
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
@endsection

