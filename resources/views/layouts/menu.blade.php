<div class="menu-superior">
        <div class="sub-menu_1">
            <img class="logo" src="./images/Logo.png" alt="Logo">
        </div>
        <div class="sub-menu_2">
            
        </div>
        <div class="sub-menu_3">
            <span class="icon-bell"></span>
        </div>
        <div class="sub-menu_3">
            <span class="icon-cog"></span>
        </div>
        <div class="sub-menu_3">
<<<<<<< HEAD
            <a href="" ><span class="icon-exit"></span></a>
=======
              <a class="icon-exit"
                  onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                  </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
>>>>>>> 720850006cc3ab4cba7f80c15691ce0ed49e0626
        </div>
    </div>

    <div class="menu-lateral">
        <div class="avatar">
            <a href="/"><img class="img-avatar" src="./images/2076984.png" alt="Avatar"></a>
            <p>Bienvenido</p>
            <p>Usuario</p>
        </div>
        <nav>
        <li>
            <span class="icon-home"></span>
            <br>
            <a href="/usuarios">Usuarios</a>
        </li>
            <li>
                <span class="icon-home"></span>
                <br>
                <a href="/admin">Home</a>
            </li>
            <li>
                <span class="icon-leaf"></span>
                <br>
                <a href="/lista">Playas</a>
            </li>
            <li>
                <span class="icon-file-text"></span>
                <br>
                <a href="votos">Encuestas</a>
            </li>
        </nav>
    </div>
    <main class="py-4">
            @yield('content')
        </main>