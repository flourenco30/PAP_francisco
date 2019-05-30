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
              <li><a data-toggle="modal" data-target="#perfilModal" style="color: white;">Perfil</a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color: white;"><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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