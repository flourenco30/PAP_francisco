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
          <li class="menu-active"><a href="#hero">Página Inicial</a></li>
          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#servicos">Serviços</a></li>
          <li><a href="#contact">Contactos</a></li>
          @auth
          @if(Auth::user()->email == "admin@ferreira-auto.pt")
          <li><a href="#contact">Dashboard</a></li>
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
    Tabela
  ============================-->
  <h1 style="text-align: center;">TABELA USERS</h1>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Handle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>

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
