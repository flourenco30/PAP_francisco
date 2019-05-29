<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>FerreiraAuto</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/styleadmin.css" rel="stylesheet">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" style="background-color: #333333;">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="../img/logo.png" alt="" title=""/></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @auth
          @if(Auth::user()->email == "admin@ferreira-auto.pt")
          <li class="menu-active"><a href="#contact">Dashboard</a></li>
          <li><a href="/">WebSite</a></li>
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

  <main style="padding-top: 8%;padding-bottom:">
  <!--==========================
    Tabela Users
  ============================-->
  <div class="container">
  <h1 style="text-align: center;">TABELA USERS</h1>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Email</th>
          <th scope="col">Contacto</th>
          <th scope="col">NIF</th>
        </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          <tr>
            <th style="font-weight:normal;">{{$user->id}}</th>
            <th style="font-weight:normal;">{{$user->name}}</th>
            <th style="font-weight:normal;">{{$user->email}}</th>
            @if($user->contacto == "")
            <th style="font-weight:normal;">Não Inseriu</th>
            @else
            <th style="font-weight:normal;">{{$user->contact}}</th>
            @endif
            @if($user->nif == "")
            <th style="font-weight:normal;">Não Inseriu</th>
            @else
            <th style="font-weight:normal;">{{$user->nif}}</th>
            @endif
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>

  <!--==========================
    Tabela Serviços
  ============================-->
  <div class="container">
      <h1 style="text-align: center;margin-top: 10%;">TABELA SERVIÇOS</h1>
      <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#serviModal">Criar Serviço</button>
      <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#serviCaracModal">Associar Caracteristica</button>
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Preço</th>
            </tr>
          </thead>
          <tbody>
              @foreach($servis as $servi)
              <tr>
                <th style="font-weight:normal;">{{$servi->id}}</th>
                <th style="font-weight:normal;">{{$servi->nome}}</th>
                <th style="font-weight:normal;">{{$servi->preco}}€</th>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>

        <!--==========================
    Tabela Caracteristicas
  ============================-->
  <div class="container">
      <h1 style="text-align: center;margin-top: 10%;">TABELA CARACTERISTICAS</h1>
      <button type="button" class="btn btn-primary" style="margin-bottom: 30px;" data-toggle="modal" data-target="#caracModal">Criar Caracteristica</button>
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Descrição</th>
              <th scope="col">Preço</th>
            </tr>
          </thead>
          <tbody>
              @foreach($caracs as $carac)
              <tr>
                <th style="font-weight:normal;">{{$carac->id}}</th>
                <th style="font-weight:normal;">{{$carac->desc}}</th>
                <th style="font-weight:normal;">{{$carac->preco}}€</th>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>FerreiraAuto</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!--===============================
      Modal Form Caracteristica
  ================================-->
      <!-- Modal -->
      <div class="modal fade" id="caracModal" tabindex="-1" role="dialog" aria-labelledby="caracModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agendamento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{url('/criar-carac')}}">
                  @csrf
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Descrição: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticName" name="desc">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Preço:</label>
                      <div class="col-sm-10">
                        <input type="number" min="1" max="100" class="form-control" name="preco" id="inputDataHora">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Criar</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
          </div>

          <!--===============================
      Modal Form Servico
  ================================-->
      <!-- Modal -->
      <div class="modal fade" id="serviModal" tabindex="-1" role="dialog" aria-labelledby="serviModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Criar Serviço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{url('/criar-servi')}}">
                  @csrf
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Nome: </label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="staticName" name="nome">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Preço:</label>
                      <div class="col-sm-10">
                        <input type="number" min="1" max="100" class="form-control" name="preco">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Criar</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
          </div>

          <!--===============================
      Modal Form Servico
  ================================-->
      <!-- Modal -->
      <div class="modal fade" id="serviCaracModal" tabindex="-1" role="dialog" aria-labelledby="serviCaracModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Criar Serviço</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{url('/')}}">
                  @csrf
                    <div class="form-group row">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Serviço: </label>
                      <div class="col-sm-10">
                        <select class="form-control col-sm-12" id="sel1" style="margin-right: 5px;" name="hora">
                          @foreach($servis as $servi)
                            <option value={{$servi->id}}>{{$servi->nome}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Preço:</label>
                      <div class="col-sm-10">
                        @foreach($caracs as $carac)
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" aria-label="Radio button for following text input">
                            </div>
                          </div>
                          <p class="form-control">{{$carac->preco . '€ - ' . $carac->desc}}</p>
                        </div>
                        @endforeach
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Criar</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                  </form>
              </div>
            </div>
          </div>
          </div>
      

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
