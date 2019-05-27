<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FerreiraAuto</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title=""/></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Página Inicial</a></li>
          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#servicos">Serviços</a></li>
          <li><a href="#contact">Contactos</a></li>
          @auth
          @if(Auth::user()->email == "admin@ferreira-auto.pt")
          <li><a href="/admin/dashboard">Dashboard</a></li>
          @endif
          <li>
            <a href="#" data-toggle="dropdown" role="button" id="dropdown-style" aria-haspopup="true" aria-expanded="false"><i class="far fa-user-circle fa-2x"></i>&nbsp;&nbsp;<span style="position: relative;top: -4px;">{{ Auth::user()->name }}</span></a>
            <ul class="dropdown-menu">
              <li><a data-toggle="modal" data-target="#perfilModal">Perfil</a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>Log Out</a></li>
            </ul>
          </li>
          @endauth
          @guest
            <li><a href="/login"><i class="fas fa-sign-in-alt"></i>&nbsp;LogIn</a></li>
            <li><a href="/register"><i class="fas fa-user-plus"></i>&nbsp;Registo</a></li>
          @endguest
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1 id="titulo">Ferreira <span style="color: #0099ff">Auto</span></h1>
      <h2>Nós somos uma empresa especializada em serviços de lavagem automóvel.</h2>
      <a href="#servicos" class="btn-get-started">Agendar Serviço</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container" id="about-main">
        <div class="row col-9 about-container" id="about-first">

          <div class="col-lg-10 content order-lg-1 order-2">
            <h2 class="title">Sobre nós!</h2>
            <p style="text-align: justify;">
                <span style="text-shadow: 0.5px 0.5px #111;">Ferreira<span style="color: #0099ff">Auto</span></span> é uma empresa 
                especializada em limpeza de veículos (carros e motos), aspiração e mudança de oleo e filtros. A nossa tecnologia não só 
                limpa, mas também esteriliza e desodoriza, matando todas as bactérias e germes que causam mau odor, e é menos agressiva 
                para as viaturas. Contacte-nos para mais informações ou agende já a lavagem da sua viatura!
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fas fa-shower"></i></div>
              <h4 class="title"><a href="#servicos">Lavagem Automóvel</a></h4>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fas fa-broom"></i></div>
              <h4 class="title"><a href="#servicos">Aspiração Automóvel</a></h4>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fas fa-oil-can"></i></div>
              <h4 class="title"><a href="#servicos">Mudança de Filtros e Óleo</a></h4>
            </div>

            <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
          </div>
        </div>
        <div class="row about-image-container" id="about-second">
            <div class="container-carousel">
                <div class="carousel">
                  <input type="radio" id="carousel-1" name="carousel[]" checked>
                  <input type="radio" id="carousel-2" name="carousel[]">
                  <input type="radio" id="carousel-3" name="carousel[]">
                  <ul class="carousel__items">
                    <li class="carousel__item"><img src="https://image.delti.com/simg/landingpages/carwash.jpg" alt=""></li>
                    <li class="carousel__item"><img src="https://cdn.wd40company.eu/wd-40/pt-PT/uploads/2018/02/06170201/limpar-carro.jpeg" alt=""></li>
                    <li class="carousel__item"><img src="https://bonopneus.com.br/wp-content/uploads/2019/02/servico-troca-de-oleo.jpg" alt=""></li>
                  </ul>
                   <div class="carousel__prev">
                     <label for="carousel-1"></label>
                     <label for="carousel-2"></label>
                     <label for="carousel-3"></label>
                   </div>
                   <div class="carousel__next">
                     <label for="carousel-1"></label>
                     <label for="carousel-2"></label>
                     <label for="carousel-3"></label>
                   </div>
                   <div class="carousel__nav">
                     <label for="carousel-1"></label>
                     <label for="carousel-2"></label>
                     <label for="carousel-3"></label>
                   </div>
                 </div>
               </div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Estatisticas</h3>
        </div>
        <br>
        <div class="row counters">

  				<div class="col-lg-7 col-6 text-center">
            <span data-toggle="counter-up">359</span>
            <p>Clientes</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">47192</span>
            <p>Serviços Realizados</p>
  				</div>
  			</div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Services Section
    ============================-->
    <section class="pricing py-5" id="servicos">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">SERVIÇOS</h3>
        </div>
        <div class="row mt-5 mb-5">
          <!-- Free Tier -->
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">BASIC</h5>
                <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>20</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Lavagem Manual</strong></li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza de vidros</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Hidratante de pneus</li>
                </ul>
                @auth
                <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                @endauth
                @guest
                <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                @endguest
              </div>
            </div>
          </div>
          <!-- Plus Tier -->
          <div class="col-lg-4">
            <div class="card mb-5 mb-lg-0">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">STANDARD</h5>
                <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>40</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Lavagem Basic</strong></li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Aplicação de cera</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Interior aspirado</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza pó interior</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza de vidros</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Hidratante de pneus</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Tratamento plásticos interiores</li>
                </ul>
                @auth
                <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                @endauth
                @guest
                <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                @endguest
              </div>
            </div>  
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-muted text-uppercase text-center">ADVANCED</h5>
                <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>60</h6>
                <hr>
                <ul class="fa-ul">
                  <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Lavagem Standard</strong></li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza e acondicionamento de estofos</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza e acondicionamento de eplásticos e vinil</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Limpeza do foro do tejadilho</li>
                  <li><span class="fa-li"><i class="fas fa-check"></i></span>Lavagem e acondicionamento dos tapetes e alcatifas</li>
                </ul>
                @auth
                  <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                @endauth
                @guest
                  <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                @endguest
              </div>
            </div>
          </div>
            <div id="ola" class="row mt-5 mb-5" style="display: none;">
            <div class="row mt-5 mb-5">
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">BASIC MOTO</h5>
                  <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>20</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Lavagem Manual</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>condicionamento de plásticos e vinil</li>
                  </ul>
                  @auth
                    <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                  @endauth
                  @guest
                    <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                  @endguest
                </div>
              </div>
            </div>
            <!-- Plus Tier -->
            <div class="col-lg-4">
              <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">BASIC OLEO</h5>
                  <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>25</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Revisão Simples</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Inclui Oleo</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>10 pontos de controlo</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Mão de obra incluida</li>
                  </ul>
                  @auth
                    <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                  @endauth
                  @guest
                    <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                  @endguest
                </div>
              </div>  
            </div>
            <!-- Pro Tier -->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase text-center">ADVANCED OLEO/FILTROS</h5>
                  <h6 class="card-price text-center"><span style="font-size: 0.75em;">€</span>80</h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Revisão Simples</strong></li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Mudança de filtros</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>70 pontos de controlo</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Manutenção personalizada de acordo com as prescrições do construtor</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Mão de obra incluida</li>
                  </ul>
                  @auth
                    <a class="btn btn-block btn-primary text-uppercase text-light" data-toggle="modal" data-target="#agendaModal">AGENDAR</a>
                  @endauth
                  @guest
                    <a href="/login" class="btn btn-block btn-primary text-uppercase">AGENDAR</a>
                  @endguest
                </div>
              </div>
            </div>
            </div>
              <div class="my_bt_custom">
                  <button id="btcustom" class="button btn-block btn-primary text-uppercase ">Criar Serviço Personalizado</button>
              </div>
            </div>

            <div class="my_bt_readmore">
                <button id="meubt" onclick="myFunction()" class="button btn-block btn-primary text-uppercase ">Ver Mais Serviços</button>
            </div>
        </div>
      </div>
    </section>

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Vantagens Ferreira<span style="color: #0099ff">Auto</span></h3>
            <p class="cta-text">Comodidade, rapidez e profissionalismo é o nosso lema. Basta escolher um dos nosso serviços que melhor se adapta às suas necessidades e agendar o mesmo.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#servicos">Agendar Serviço</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contactos</h3>
          <p class="section-description">Qualquer dúvida não exite, pergunte-nos!</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://maps.google.com/maps?q=R.%20In%C3%A1cio%20Nunes%20da%20Costa%2019%2C%202560-538%20Silveira&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>R. Inácio Nunes da Costa, Nº19<br>2560-538 Silveira, Torres Vedras</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>ferreira-auto@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+351 915421311</p>
              </div>
            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">A sua mensagem foi enviada. Obrigado!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                @auth
                <div class="form-group">
                  <h2 sytle="text-shadow: 1px 1px #111;">Olá {{ Auth::user()->name }}!<h2>
                </div>
                @endauth
                @guest
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="O seu Nome" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="O seu Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                @endguest
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escreva a sua dúvida" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>FerreiraAuto</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->


  <!--===============================
      Modal Form Agendamento
  ================================-->
      <!-- Modal -->
    <div class="modal fade" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="agendaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Agendamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{url('/agendar')}}">
            @csrf
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nome: </label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control"id="staticName" value="{{Auth::user()->name}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Data<span style="color: red;">*</span>:</label>
                <div class="col-sm-4">
                  <input type="date" class="form-control" name="Data" id="inputDataHora">
                </div>
                <label for="inputPassword" class="col-sm-2 col-form-label">Hora<span style="color: red;">*</span>:</label>
                <div class="col-sm-4">
                  <div class="row">
                    <select class="form-control col-sm-3" id="sel1" style="margin-right: 5px;" name="hora">
                      <option value=8>8</option>
                      <option value=9>9</option>
                      <option value=10>10</option>
                      <option value=11>11</option>
                      <option value=12>12</option>
                      <option value=13>13</option>
                      <option value=14>14</option>
                      <option value=15>15</option>
                      <option value=16>16</option>
                      <option value=17>17</option>
                      <option value=18>18</option>
                    </select>
                    <span style="margin-right: 30px;margin-top: 3%;">h</span>
                    <select class="form-control col-sm-3" id="sel1" style="margin-right: 5px;" name="minutos">
                        <option value=00>00</option>
                        <option value=30>30</option>
                    </select>
                    <span style="margin-top: 2%;">m</span>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Notas:</label>
                <div class="col-sm-10">
                  <textarea name="message" rows="10" cols="30" class="form-control" name="Notas" id="inputDataHora"></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Enviar Pedido</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#perfilModal">Personalizar dados faturamento</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
    </div>

  <!--===============================
    Modal Form Perfil
  ================================-->
  <!-- Modal -->
  <div class="modal fade" id="perfilModal" tabindex="-1" role="dialog" aria-labelledby="perfilModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Perfil Utilizador</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="{{url('/alter-user')}}">
          @csrf
            <div class="form-group row">
              <label for="staticName" class="col-sm-2 col-form-label">Nome: </label>
              <div class="col-sm-10">
                @auth
                  <input type="text" readonly class="form-control" id="staticName" value="{{Auth::user()->name}}">
                @endauth
              </div>
            </div>
            <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">Email: </label>
              <div class="col-sm-10">
                @auth
                  <input type="text" readonly class="form-control" id="staticEmail" value="{{Auth::user()->email}}">
                @endauth
              </div>
            </div>
            <div class="form-group row">
              <label for="staticNif" class="col-sm-2 col-form-label">NIF: </label>
              <div class="col-sm-10">
                @auth
                  <input type="text" class="form-control" id="staticNif" name="nif" value="{{Auth::user()->nif}}">
                @endauth
              </div>
            </div>
            <div class="form-group row">
              <label for="staticContact" class="col-sm-2 col-form-label">Contacto: </label>
              <div class="col-sm-10">
                @auth
                  <input type="text" class="form-control" id="staticContact" name="contacto" value="{{Auth::user()->contacto}}">
                @endauth
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>  
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
