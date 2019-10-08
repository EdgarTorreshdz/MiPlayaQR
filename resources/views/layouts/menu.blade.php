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
            <a href="session_destroy();" ><span class="icon-exit"></span></a>
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