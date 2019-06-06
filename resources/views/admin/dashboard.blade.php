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
  <link rel="stylesheet" href="{{ mix('css/FullCalendar.css') }}">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  @include('components.admin.sections.header')

  <main style="padding-top: 8%;padding-bottom:">
  <!--==========================
    Tabela Users
  ============================-->
  @include('components.admin.Tables.users-table')

  <!--==========================
    Tabela Serviços
  ============================-->
  @include('components.admin.Tables.servicos-table')

  <!--==========================
    Tabela Caracteristicas
  ============================-->
  @include('components.admin.Tables.caracteristicas-table')

  <div class="container mb-3">
    <h1 style="text-align: center;margin-top: 10%;">CALENDÁRIO AGENDAMENTOS</h1>
    <div id="calendar"></div>
  </div>


  </main>


  <!--==========================
    Footer
  ============================-->
  @include('components.admin.sections.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!--===============================
      Modal Form Caracteristica
  ================================-->
  @include('components.admin.modals.caracteristicas')

  <!--===============================
      Modal Form Servico
  ================================-->
  @include('components.admin.modals.servico') 

  <!--===============================
      Modal Form Servico/Caracteristicas
  ================================-->
  @include('components.admin.modals.carac-servi') 
      

  <!-- JavaScript Libraries -->
  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ mix('js/FullCalendar.js') }}"></script>
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
