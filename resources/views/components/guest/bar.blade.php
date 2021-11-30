<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ml-auto">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('actualCodes.show')}}">GENSHINCODE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('dashboard')}}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{$user->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @if($user->hasRole('user'))
                                <a class="dropdown-item" href="#">Мои обьявления</a>
                        @elseif($user->hasRole('admin'))
                                <a class="dropdown-item" href="{{route('dashboard')}}">Панель управления</a>
                        @endif
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                </form>
                        </div>
                    </li>
                @endauth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Доска обьявлений
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Аккаунты</a>
                            <a class="dropdown-item" href="#">Услуги</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gn-news.index')}}">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Промокоды</a>
                    </li>
            </ul>
                <div class="btn-group ml-auto" role="group" aria-label="Basic mixed styles example">
                    @auth()
                        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endauth
                    @guest()
                        <a href="{{route('login')}}" type="button" class="btn btn-primary">Вход</a>
                        <a href="{{route('register')}}" type="button" class="btn btn-primary">Регистрация</a>
                    @endguest
                    <a class="nav-link " href="{{route('about.show')}}">О сайте</a>
                </div>
            </div>
        </div>
    </div>
</nav>
