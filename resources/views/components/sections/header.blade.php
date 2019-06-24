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
          <h2>Nós somos um estabelecimento especializado em serviços de lavagem automóvel.</h2>
          <h4 style="color: white;-webkit-text-stroke: .5px #000;font-weight: 900;">Agende Já!</h4><i class="fas fa-arrow-down fa-3x mb-3" style="color: #0099ff;-webkit-text-stroke: .5px white;"></i>
          <a href="#servicos" class="btn-get-started">Agendar Serviço</a>
        </div>
      </section><!-- #hero -->