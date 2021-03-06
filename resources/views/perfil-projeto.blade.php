@extends('layouts.app')

@section('title')
    <title>Perfil do Projeto</title>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Kaushan+Script|Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feed.css') }}">
    <link rel="stylesheet" href="{{ asset('css/feed-giu.css') }}">
@endsection


@section('search')
    <form class="form-inline my-2 my-lg-0" action="{{route('feed')}}">
        <input class="form-control  search" type="search" placeholder="Pesquisar" aria-label="Pesquisar" style="width: 65%;">
        <button class="btn btn-orange btn-search" type="submit">
            <img class="search" src="img/search.png" alt="">
        </button>
    </form>
@endsection

@section('nav-links')
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
        @else
            <li class="nav-item active">
                <a class="nav-link" href="{{  route('home') }}">Meu perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('feed') }}">Feed</a></li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href={{ route('cadastroProjeto') }}>Enviar projeto</a>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
    @endguest
@endsection

@section('content')
    <div class=" d-flex flex-row-reverse flex-wrap " >
        <div class="col-lg-10 py-3 px-5" id="main-conteudo">
            <div class="row d-flex align-items-center">
                <div class=" titulo-secao">
                    Projeto:
                </div>
                <div id="nomeProjeto">
                    <h1>Inauguração da Cinemateca</h1>
                </div>
            </div>
            <div class="row justify-content-start mb-4" id="habilidadesProjeto ">
                <button type="button " class="btn btn-deep-orange  btn-sm m-1 ">Artes</button>
                <button type="button " class="btn btn-deep-orange btn-sm m-1 ">Artesanato</button>
                <button type="button " class="btn btn-deep-orange btn-sm m-1 ">Mídias</button>
            </div>
            <nav>
                <div class="nav nav-tabs btn-principais-feed" id="nav-tab" role="tablist">
                    <a class="btn-feed nav-item nav-link active text-center" id="nav-home-tab" data-toggle="tab" href="#feed-user" role="tab" aria-controls="nav-home" aria-selected="true">Sobre</a>
                    <a class="btn-feed nav-item nav-link text-center" id="nav-profile-tab" data-toggle="tab" href="#feed-site" role="tab" aria-controls="nav-profile" aria-selected="false">Linha do Tempo</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="conteudo-sobre tab-pane fade show px-2 py-2 active" id="feed-user" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row " id="descricao-projeto ">
                        <p class="text-justify p-3"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse porro officiis debitis ducimus necessitatibus culpa laudantium earum unde reprehenderit! Tenetur quas minima inventore incidunt totam. Quos neque nihil culpa et.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione corrupti velit facere eos sit? Et maiores cupiditate, praesentium saepe molestiae harum ratione explicabo sit atque fugiat, inventore quaerat eius ea!
                        </p>
                    </div>
                    <div class="row" id="mapa-cal">
                        <div class="col-md-6   justify-content-center ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.340557539858!2d-46.646774699999995!3d-23.5921163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a20cbb8803f%3A0x881797bc7c83b42f!2sCinemateca%20Brasileira!5e0!3m2!1spt-BR!2sbr!4v1585923808392!5m2!1spt-BR!2sbr"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="col-md-6  justify-content-center ">
                            <div class="calendar">
                                <div class="month">
                                    <ul>
                                        <li class="prev ">&#10094;</li>
                                        <li class="next ">&#10095;</li>
                                        <li>Agosto<br><span>2020</span></li>
                                    </ul>
                                </div>
                                <ul class="weekdays">
                                    <li>Seg</li>
                                    <li>Ter</li>
                                    <li>Qua</li>
                                    <li>Qui</li>
                                    <li>Sex</li>
                                    <li>Sab</li>
                                    <li>Dom</li>
                                </ul>
                                <ul class="days">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                    <li>4</li>
                                    <li>5</li>
                                    <li>6</li>
                                    <li>7</li>
                                    <li>8</li>
                                    <li>9</li>
                                    <li><span class="active ">10</span></li>
                                    <li>11</li>
                                    <li>12</li>
                                    <li>13</li>
                                    <li>14</li>
                                    <li>15</li>
                                    <li>16</li>
                                    <li>17</li>
                                    <li>18</li>
                                    <li>19</li>
                                    <li>20</li>
                                    <li>21</li>
                                    <li>22</li>
                                    <li>23</li>
                                    <li>24</li>
                                    <li>25</li>
                                    <li>26</li>
                                    <li>27</li>
                                    <li>28</li>
                                    <li>29</li>
                                    <li>30</li>
                                    <li>31</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="titulo-secao row  justify-content-center " id="vagas ">
                        Vagas
                    </div>
                    <div class="job-card row justify-content-center align-items-center m-2">
                        <div class="card card-vagas bg-light m-3" >
                            <div class="card-header">
                                <img src="img/rain.svg" width="20" alt=""> Aberto
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Editor de Vídeo</h5>
                                <p class="card-text justify-content-center">
                                    <img src="img/wallet.svg" width="15" alt=""> R$15 a R$20 por hora
                                    <br>
                                    <img src="img/you-are-here.svg" width="15" alt=""> São Paulo, SP
                                    <br>
                                    <img src="img/round-wall-clock.svg" width="15" alt=""> 02/Jul a 02/Ago
                                    <br>
                                    <br> Procuramos profissional que atue com edição de vídeos de forma prática e criativa, desenvolvendo uma boa narrativa para captar a atenção da audiência.
                                    <br>
                                    <div class="habilidades d-flex flex-wrap font-smaller">
                                        <a class="bg-secondary m-1  text-white" href=""> Adobe Premiere </a>
                                        <a class="bg-secondary d-inline m-1 text-white " href=""> After Effects </a>
                                        <a class="bg-secondary d-inline  m-1 text-white " href=""> Photoshop </a>
                                        <a class="bg-secondary d-inline  m-1 text-white " href=""> Storytelling </a>
                                        <a class="m-1" href="">mais</a>
                                    </div>
                                </p>
                                <button class="btn peach-gradient">Aplicar</button>
                            </div>
                        </div>
                        <div class="card card-vagas bg-light m-3" >
                            <div class="card-header">
                                <img src="img/rain.svg" width="20" alt=""> Aberto
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Editor de Vídeo</h5>
                                <p class="card-text justify-content-center">
                                    <img src="img/wallet.svg" width="15" alt=""> R$15 a R$20 por hora
                                    <br>
                                    <img src="img/you-are-here.svg" width="15" alt=""> São Paulo, SP
                                    <br>
                                    <img src="img/round-wall-clock.svg" width="15" alt=""> 02/Jul a 02/Ago
                                    <br>
                                    <br> Procuramos profissional que atue com edição de vídeos de forma prática e criativa, desenvolvendo uma boa narrativa para captar a atenção da audiência.
                                    <br>
                                    <div class="habilidades d-flex flex-wrap font-smaller">
                                        <a class="bg-secondary m-1  text-white" href=""> Adobe Premiere </a>
                                        <a class="bg-secondary d-inline m-1 text-white " href=""> After Effects </a>
                                        <a class="bg-secondary d-inline  m-1 text-white " href=""> Photoshop </a>
                                        <a class="bg-secondary d-inline  m-1 text-white " href=""> Storytelling </a>
                                        <a class="m-1" href="">mais</a>
                                    </div>
                                </p>
                                <button class="btn peach-gradient">Aplicar</button>
                            </div>
                        </div>
                        <div class="card card-vagas bg-light m-3" >
                            <div class="card-header"><img src="img/umbrella.svg" width="20" alt=""> Fechado
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Editor de Vídeo</h5>
                                <p class="card-text justify-content-center">
                                    <img src="img/you-are-here.svg" width="15" alt=""> São Paulo, SP
                                    <br>
                                    <img src="img/round-wall-clock.svg" width="15" alt=""> 02/Jul a 02/Ago
                                    <br>
                                    <br> Procuramos profissional que atue com edição de vídeos de forma prática e criativa, desenvolvendo uma boa narrativa para captar a atenção da audiência.
                                    <br>
                                    <div class=" row circle peach-gradient p-4 justify-content-center">
                                        <div class="foto-perfil image-cropper d-flex justify-content-center ">
                                            <img class="  rounded-circle  peach-gradient " src="img/mulher1.jpg " alt="perfil-user ">
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                        <div class="card card-vagas bg-light m-3 " >
                            <div class="card-header ">
                                <img src="img/rain.svg " width="20 " alt=" "> Aberto
                            </div>
                            <div class="card-body ">
                                <h5 class="card-title ">Editor de Vídeo</h5>
                                <p class="card-text justify-content-center ">
                                    <img src="img/wallet.svg " width="15 " alt=" "> R$15 a R$20 por hora
                                    <br>
                                    <img src="img/you-are-here.svg " width="15 " alt=" "> São Paulo, SP
                                    <br>
                                    <img src="img/round-wall-clock.svg " width="15 " alt=" "> 02/Jul a 02/Ago
                                    <br>
                                    <br> Procuramos profissional que atue com edição de vídeos de forma prática e criativa, desenvolvendo uma boa narrativa para captar a atenção da audiência.
                                    <br>
                                    <div class="habilidades d-flex flex-wrap font-smaller ">
                                        <a class="bg-secondary m-1 text-white " href=" "> Adobe Premiere </a>
                                        <a class="bg-secondary d-inline m-1 text-white " href=" "> After Effects </a>
                                        <a class="bg-secondary d-inline m-1 text-white " href=" "> Photoshop </a>
                                        <a class="bg-secondary d-inline m-1 text-white " href=" "> Storytelling </a>
                                        <a class="m-1 " href=" ">mais</a>
                                    </div>
                                </p>
                                <button class="btn peach-gradient ">Aplicar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="conteudo-feed tab-pane fade px-2 pt-2" id="feed-site" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="container border p-4">
                        <div class="row justify-content-start">

                            <div class="pesquisa-feed-projeto mx-auto">
                                    <textarea class="form-control" rows="2" placeholder="O que seu toró está pensando?"></textarea>
                                    <div class="mar-top clearfix">
                                        <button class="btn btn-sm btn-compartilhar pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
                                        <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
                                        <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
                                        <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
                                    </div>
                            </div>
                            <div class="feed-publicacoes mx-auto">
                                <div class="card mb-4">
                                    <div class="card-body">
                                            <a class="media-left" href="#"><img class="img-circle img-publi"  alt="Profile Picture" src="img/clubeLeitura.jpeg"></a>
                                            <div class="media-body">
                                                <div class="mar-btm">
                                                    <a href="#" class="btn-link text-semibold media-heading box-inline">Clube da Leitura, Menina Flor</a>
                                                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                                </div>
                                                <p>
                                                    Olá pessoal,
                                                    Vem aí um projeto de leitura voltado totalmente à mulheres, aguarde! :-)
                                                </p>
                                                <div class="pad-ver">
                                                    <div class="btn-group">
                                                        <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                                        <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                                    </div>
                                                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <!-- Comments -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <a class="media-left" href="#"><img class="img-circle img-publi" alt="Profile Picture" src="img/mpb.jpeg"></a>
                                        <div class="media-body">
                                            <div class="mar-btm">
                                                <a href="#" class="btn-link text-semibold media-heading box-inline">Grupo MPB Mais +</a>
                                                <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 7 min ago</p>
                                            </div>
                                            <p>
                                                Nosso festival de música foi um sucesso!!!
                                                Lotamos a casa e tivemos muito artistas revelados.
                                                @Luiz, @Marisa @Marta, foram alguns dos artistas que estavam conosco e estão aqui no Toró.
                                            </p>
                                            <div class="pad-ver">
                                                <div class="btn-group">
                                                    <a class="btn btn-sm btn-default btn-hover-success active" href="#"><i class="fa fa-thumbs-up"></i> You Like it</a>
                                                    <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                                </div>
                                                <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <!--  <div class="media-block">  -->
                                            <a class="media-left" href="#"><img class="img-circle img-publi" alt="Profile Picture" src="img/mulher.jpeg">
                                            </a>
                                            <div class="media-body">
                                                <div class="mar-btm">
                                                    <a href="#" class="btn-link text-semibold media-heading box-inline">Teatro Mulherzinha Sim Senhô</a>
                                                    <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> - From Web - 2 min ago</p>
                                                </div>
                                                <p>
                                                    E pra comemorar o mês da mulher, teremos apresentações nos dias 11, 12 e 13 de março no Teatro Augusta, contando um pouco da história do dia 08 de Março!
                                                    Logo vamos publicar novas vagas como atriz, fotógrafa, e editor de som.
                                                </p>
                                                <div class="pad-ver">
                                                    <div class="btn-group">
                                                        <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                                        <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                                    </div>
                                                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                                                </div>
                                            </div>
                                        <!--   </div>  -->
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="panel-body">
                                        <!--  <div class="media-block">  -->
                                            <a class="media-left" href="#"><img class="img-circle img-publi" alt="Profile Picture" src="img/mulher 2.jpeg"></a>
                                            <div class="media-body">
                                                <div class="mar-btm">
                                                    <a href="#" class="btn-link text-semibold media-heading box-inline">Grupo de Teatro Luiz Maia</a>
                                                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                                </div>
                                                <p>
                                                Dentro de instantes começa!!! Promessa de casa cheia! S2
                                                </p>
                                                <img class="img-responsive thumbnail img-publi-publi" src="img/teatro2.jpeg" alt="Image">
                                                <div class="pad-ver">
                                                    <span class="tag tag-sm"><i class="fa fa-heart text-danger"></i> 30 Likes</span>
                                                    <div class="btn-group">
                                                        <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                                        <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                                    </div>
                                                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                                                </div>
                                            </div>
                                        <!--   </div>  -->
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <!--  <div class="media-block">  -->
                                            <a class="media-left" href="#"><img class="img-circle img-publi" alt="Profile Picture" src="img/teatro.jpeg"></a>
                                            <div class="media-body">
                                                <div class="mar-btm">
                                                    <a href="#" class="btn-link text-semibold media-heading box-inline">Grupo Luís de Camões</a>
                                                    <p class="text-muted text-sm"><i class="fa fa-globe fa-lg"></i> - From Web - 20 min ago</p>
                                                </div>
                                                <p>Começou a seguir</p> <br>
                                                <a href="#" class="btn-link text-semibold media-heading box-inline">Nicole Moraz</a><br>
                                                <img class="img-responsive thumbnail img-publi-publi" src="img/apresentacao.jpeg" alt="Image">
                                                <div class="pad-ver">
                                                    <div class="btn-group">
                                                        <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                                                        <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                                                    </div>
                                                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
                                                </div>
                                            </div>
                                        <!--   </div>  -->
                                    </div>
                                </div>
                            </div>

                                <!--===================================================-->
                                <!-- End Newsfeed Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2 menu-esq pt-5 d-flex justify-content-start" id="menu-lado">
                <h6 class="my-0">Sobre o autor</h6> <br>
                <h5 class="my-0">Nome de usuário</h5> <br>
                <div class="text-center">
                    <canvas id="UgCanvas " width="100em " height="100em " style="border:2.5px solid rgb(165, 157, 157); border-radius: 50%; ">
                    </canvas>
                </div>
                <div class="row  mx-auto">
                    <div id="star-rank ">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star checked "></span>
                        <span class="fa fa-star "></span>
                    </div>
                </div>
                <br>
                <div class="text-center">
                    <p>18 avaliações</p>
                </div>
            <hr class="my-4 ">
            <div id="user-statistics ">
                <h6>Estatísticas</h6>
                <ul>
                    <li class="py-3 text-center"><strong>44</strong> Visualizações</li>
                    <li class="py-3 text-center">Recomendam o trabalho <strong>89%</strong> </li>
                    <li class="py-3 text-center"><strong>82%</strong>Taxa de resposta</li>
                </ul>
                <p class="text-center">Publicado há 1 mês</p>
            </div>
            <hr class="my-4 ">
            <div id="user-network ">
                <h6 class="pb-3 ">Nossa equipe</h6>
                <div class=" row px-1 pt-2 ">
                    <div class="row mx-auto">
                        <div class="foto-perfil image-cropper d-flex justify-content-center ">
                            <img  height="85 em " class=" rounded-circle peach-gradient " src="img/mulher1.jpg " alt="perfil-user ">
                        </div>
                    </div>
                    <div class="row mx-auto" style="width: 100%; ">
                        <p class=" mx-auto mb-0 "><a href="# ">Nome de usuário</a></p>
                    </div>
                    <div class="row mx-auto">
                        <p class="text-center mx-auto ">Atriz</p>
                    </div>
                </div>
                <div class="row px-1 pt-2 ">
                    <div class="row mx-auto">
                        <img class=" rounded-circle peach-gradient " height="85 em " src="img/perfil.jpg " alt="perfil-user ">
                    </div>
                    <div class="row mx-auto " style="width: 100%; ">
                        <p class="text-center mx-auto mb-0 "><a href="# ">Nome de usuário</a></p>
                    </div>
                    <div class="row mx-auto">
                        <p>Profissional</p>
                    </div>
                </div>
                <div class="row px-1 pt-2 ">
                    <div class="row mx-auto">
                        <img class=" rounded-circle peach-gradient " height="85 em " src="img/perfil.jpg " alt="perfil-user ">
                    </div>
                    <div class="row mx-auto " style="width: 100%; ">
                        <p class="text-center mx-auto mb-0 "><a href="# ">Nome de usuário</a></p>
                    </div>
                    <div class="row mx-auto">
                        <p>Profissional</p>
                    </div>
                </div>
                <div class="row px-1 pt-2 ">
                    <div class="row mx-auto">
                        <img class=" rounded-circle peach-gradient " height="85 em " src="img/perfil.jpg " alt="perfil-user ">
                    </div>
                    <div class="row mx-auto " style="width: 100%; ">
                        <p class="text-center mx-auto mb-0 "><a href="# ">Nome de usuário</a></p>
                    </div>
                    <div class="row mx-auto">
                        <p>Profissional</p>
                    </div>
                </div>
                <div class="row px-1 pt-2 ">
                    <div class="row mx-auto">
                        <img class=" rounded-circle peach-gradient " height="85 em " src="img/perfil.jpg " alt="perfil-user ">
                    </div>
                    <div class="row mx-auto " style="width: 100%; ">
                        <p class="text-center mx-auto mb-0 "><a href="# ">Nome de usuário</a></p>
                    </div>
                    <div class="row mx-auto">
                        <p>Profissional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
