@extends('layouts.templateBase')

@section('title')
    <title>Perfil do Usuário</title>
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Kaushan+Script|Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/perfil.css">
@endsection

@section('search')
    <form class="form-inline my-2 my-lg-0" action="./feed-de-noticias.html">
        <input class="form-control mr-sm-1" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="width: 65%;">
        <button class="btn btn-orange my-1 my-sm-0 py-1 px-2" type="submit">
            <img class="search" src="img/search.png" alt="">
        </button>
    </form>
@endsection

@section('nav-links')
    <li class="nav-item active">
        <a class="nav-link" href="./perfil-usuario.html">Meu perfil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="./feed-de-noticias.html">Feed</a></li>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="cadastro-projeto.html">Enviar projeto</a>
    </li>
@endsection

@section('conteudoPrincipal')
    <div class="container-fluid colborder pb-5" id="main-conteudo">
        <div class="row">
            <div class="col-md-9">
                <div class="row ml-0 mt-4 mr-3" id="main-info">
                    <div class="col-md-4 mx-auto" id="foto">
                        <div class="row foto-perfil">
                            <div class="mx-auto">
                                <canvas class="text-center" id="UgCanvas" width="150px" height="150px" style="border:2.5px solid rgb(165, 157, 157); border-radius: 50%;"></canvas>
                                </canvas>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <p class="row mx-auto">São Paulo, SP<br> Online há 1 dia</p>
                        </div>
                        <div class="row mx-auto text-center">
                            <ul id="social" class="row mx-auto">
                                <a class="redes-link" href="#"><img class="redes" src="img/logo-do-facebook.png" alt="facebook"></a>
                                <a class="redes-link" href="#"><img class="redes" src="img/twitter.png" alt="twitter"></a>
                                <a class="redes-link" href="#"><img class="redes" src="img/instagram.png" alt="instagram"></a>
                                </a>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="row d-flex pb-3 ">
                            <div class="col-md-6">
                                <h3 class="nomeUser text-center">Nome do Usuário</h3>
                            </div>
                            <div class="col-md-6 text-center">
                                <a href="cadastro-usuario.html"class="text-center"><img class="icon-config pl-1 pt-1 ml-5" src="img/editar.png" alt=""></a>
                                <button type="button" class="follow btn btn-outline-warning btn-sm m-1 p-2"> Seguir</button>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center" id="habilidades">
                            <ul>
                                <li>
                                    <button type="button" class="btn btn-outline-warning btn-sm m-1 p-2">
                                        teatro
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-outline-warning btn-sm m-1 p-2">
                                        clown
                                    </button>
                                </li>
                                <li><button type="button" class="btn btn-outline-warning btn-sm m-1 p-2">
                                    fotografia
                                </button></li>
                                <li><button type="button" class="btn btn-outline-warning btn-sm m-1 p-2">
                                    edição de vídeo
                                </button></li>
                            </ul>
                            <p class="ml-4" >
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim sit nobis, aspernatur repudiandae voluptatibus ut dicta porro libero. Dignissimos expedita minima quos iste alias reprehenderit illo corrupti, debitis dicta hic!
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="my-4 ">
                <div class="row ml-0 mt-4 mr-3 pt-2" id="portfolio">
                    <div class="row px-5">
                        <h3 class="pl-5">Meus torós</h3>
                    </div>
                    <div class="row px-4">
                        <div class="container  mx-1 ">
                            <!--Carousel Wrapper-->
                            <div id="multi-item-example " class="carousel slide carousel-multi-item " data-ride="carousel ">

                                <!--Controls-->
                                <div class="controls-top ">
                                    <a class="btn-floating " href="#multi-item-example " data-slide="prev "><i class="fa fa-chevron-left "></i></a>
                                    <a class="btn-floating " href="#multi-item-example " data-slide="next "><i class="fa fa-chevron-right "></i></a>
                                </div>
                                <!--/.Controls-->

                                <!--Indicators-->
                                <ol class="carousel-indicators ">
                                    <li data-target="#multi-item-example " data-slide-to="0 " class="active "></li>
                                    <li data-target="#multi-item-example " data-slide-to="1 "></li>
                                    <li data-target="#multi-item-example " data-slide-to="2 "></li>
                                </ol>
                                <!--/.Indicators-->

                                <!--Slides-->
                                <div class="carousel-inner " role="listbox ">

                                    <!--First slide-->
                                    <div class="carousel-item active ">

                                        <div class="row ">
                                            <div class="col-md-4 ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 clearfix d-none d-md-block ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 clearfix d-none d-md-block ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="carousel-item ">

                                        <div class="row ">
                                            <div class="col-md-4 ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 clearfix d-none d-md-block ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 clearfix d-none d-md-block ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/.Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item ">

                                        <div class="row ">
                                            <div class="col-md-4 ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 clearfix d-none d-md-block ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 clearfix d-none d-md-block ">
                                                <div class="card mb-2 ">
                                                    <img class="card-img-top " src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg " alt="Card image cap ">
                                                    <div class="card-body ">
                                                        <h4 class="card-title ">Card title</h4>
                                                        <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                        <a class="btn btn-primary ">Button</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-3 menu-dir pt-5 px-4"  id="menu-lado">
                <div id="star-rank" class="text-center">
                    <h6>Avaliação Geral</h6>

                    <span class="fa fa-star checked "></span>
                    <span class="fa fa-star checked "></span>
                    <span class="fa fa-star checked "></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span> 3.0
                    <br>
                    <p>30 avaliações</p>
                    <p>Torozero Iniciante</p>
                </div>
                <!--                    <hr class="my-4 ">
                <button type="button " class="btn btn-danger">Enviar Projeto</button>-->

                <hr class="my-4 ">
                <div id="user-statistics ">
                    <h6>Estatísticas</h6>
                    <ul>
                        <li class="py-2"><strong>34</strong> Projetos Concluídos</li>
                        <li class="py-2">Recomendam o trabalho <strong>94%</strong> </li>
                        <li class="py-2"><strong>80%</strong>Taxa de resposta</li>

                    </ul>
                    <p class="text-center">Ingressou há 2 meses</p>
                </div>
                <hr class="my-4 ">
                <div id="user-network ">
                    <h6>Rede Toró</h6>
                    <li>
                        <p><strong>Seguidores</strong> 42</p>
                    </li>
                    <li>
                        <p><strong>Seguindo</strong> 50</p>
                    </li>


                </div>

            </div>
        </div>
    </div>
@endsection


    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js " integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js " integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js " integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6 " crossorigin="anonymous "></script> -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}