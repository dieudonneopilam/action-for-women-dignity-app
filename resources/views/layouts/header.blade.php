<header class="header">
    <div class="div-logo">ACTION FOR WOMEN DIGNITY</div>
    <nav class="nav-link">
        <li><a href="{{ route('about') }}">about</a></li>
        <li><a href="{{ route('members.index') }}">members</a></li>
        <li><a href="{{ route('oeuvres') }}">oeuvres</a></li>
        <li><a href="{{ route('contact') }}">contact me</a></li>
        @isset(auth()->user()->name)
        <li>
            <a style="color: red" href="#" onclick="document.querySelector('.form-logout').submit()">
                <form style="display: inline;" action="{{ route('logout') }}" method="POST" class="form-logout">
                    {{ csrf_field() }}
                    Déconnexion
                </form>
            </a>
        </li>
        @else
            <li><a href="{{ route('login') }}" style="color: red">Login</a></li>
        @endisset
    </nav>
    <nav class="nav-link-mobile">
        <div>
            <img class="image-likn-mobile" src="{{ asset('img/cambg_1.jpg') }}" alt="" srcset="">
        </div>
        <div class="links-mobile">
            @isset(auth()->user()->name)
                <li style="margin-bottom: 20px; display: flex;align-content: center;align-items: center"><img class="img-profil" src="{{ asset('img/cambg_1.jpg') }}" alt="" srcset=""><a style="color:black;" href="">{{ auth()->user()->name }}</a></li>
            @endisset
            <li><a href="{{ route('about') }}">about</a></li>
            <li><a href="{{ route('members.index') }}">members</a></li>
            <li><a href="{{ route('oeuvres') }}">oeuvres</a></li>
            <li><a href="{{ route('contact') }}">contact me</a></li>
            @isset(auth()->user()->name)
                <li style="margin-top: 40px">
                    <a style="color: red" onclick="document.querySelector('.form-logout').submit()">
                        <form action="{{ route('logout') }}" method="POST" class="form-logout">
                            {{ csrf_field() }}
                            Déconnexion
                        </form>
                    </a>
                </li>
            @else
                <li style="margin-top: 40px">
                    <a style="color: red" onclick="document.querySelector('.form-logout').submit()">
                        <form action="{{ route('login') }}" method="GET" class="form-logout">
                            {{ csrf_field() }}
                            Login
                        </form>
                    </a>
                </li>
            @endisset
            
        </div>
    </nav>
    <div class="menu">
        <svg class="open" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>
        <svg class="close" style="display: none" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
          </svg>
    </div>
</header>