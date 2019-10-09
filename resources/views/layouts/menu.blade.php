<div class="menu-superior">

        <div class="sub-menu_2">
            
        </div>
        <div class="sub-menu_3">
            <span class="icon-bell"></span>
        </div>
        <div class="sub-menu_3">
            <span class="icon-cog"></span>
        </div>
        <div class="sub-menu_3">
              <a class="icon-exit"
                  onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                  </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
        </div>
    </div>

    <div class="menu-lateral">
        <div class="avatar">
            <a href="/"><img class="img-avatar" src="./images/2076984.png" alt="Avatar"></a>
        </div>
        <nav>
            <li>
            <a href="/admin"><span class="icon-home"></span>
                <br>
                Home</a>
            </li>
            <li>
            <a href="/usuarios"><span class="icon-users"></span>
                <br>
                Usuarios</a>
            </li>
            <li>
            <a href="/lista"><span class="icon-leaf"></span>
                <br>
                Playas</a>
            </li>
            <li>
            <a href="votos"><span class="icon-file-text"></span>
                <br>
                Encuestas</a>
            </li>
        </nav>
    </div>
    <main class="py-4">
        @yield('content')
    </main>