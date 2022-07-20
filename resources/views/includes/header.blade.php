<div class="wrapper">
    <div>
        <a href="/"><span style="font-size:22px"><strong>L2EUFORIA</strong></span></a>
        <nav>
            <ul>
                <li><a class="menu" href='/'>Inicio</a></li>
                <li><a href="#startgame">Foro</a></li>
                <li><a href='/donate.html'>Donaciones</a></li>
                <li><a href="/">Contacto</a></li>
                @if(! session()->get('authenticated'))
                <li class="show-smartphone"><a href="/login">Login</a></li>
                <li class="show-smartphone"><a href="/registro">Registro</a></li>
                @else
                    <li class="show-smartphone"><a href="/profile">Mi perfil</a></li>
                    <li class="show-smartphone"><a href="/logout">Logout</a></li>

                @endif
            </ul>
        </nav>
    </div>
    <div class='hide-smartphone'>
        <div>
            @if(! session()->get('authenticated'))
                <ul class="topmenu">
                    <li><a href="/login">Login</a> | <a href="/registro">Registro</a></li>
                </ul>
            @else
                <ul class="topmenu">
                    <li><a href="/profile">Mi perfil</a> |  <a href="/logout">Logout</a></li>
                </ul>
            @endif
        </div>
    </div>
    <div class="menu-mobile">
        <span></span>
    </div>
</div>
