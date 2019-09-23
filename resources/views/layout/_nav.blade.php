<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('root_path')}}">{{config('app.name')}}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{set_active_route('root_path')}}"><a href="{{route('root_path')}}">Home</a></li>
                <li class="{{set_active_route('about_path')}}"><a href="{{route('about_path')}}">About</a></li>
                <li><a href="#contact">Artisans</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planète <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="https://laravel.com">Laravel.com</a></li>
                        <li><a href="https://laravel.io">Laravel.io</a></li>
                        <li><a href="https://laracast.com">Laracasts</a></li>
                        <li><a href="https://larajobs.com">Larajobs</a></li>
                        <li><a href="https://larachat.com">Larachat</a></li>

                    </ul>
                </li>
                <li class="{{set_active_route('contact_path')}}"><a href="{{route('contact_path')}}">Contact</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{route('login')}}">Login</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>


        </div><!--/.nav-collapse -->
    </div>
</nav>
