<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">


        <nav>
            <div class="nav-wrapper container">
            <a href="{{ route('home')}}" class="brand-logo"> APS </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    @guest
                        <li><a  href="{{ route('login') }}" >{{ __('Login') }} </a></li>

                        @if (Route::has('register'))
                            <li><a  href="{{ route('register') }}"> {{ __('Register') }}</a> </li>
                        @endif

                    @else
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">  {{ Auth::user()->name }}  <i class="material-icons right">arrow_drop_down</i></a></li>
                        <ul id="dropdown1" class="dropdown-content">
                            <li><a href="#!">   {{ Auth::user()->name }} </a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </li>

                            <li class="divider"></li>
                        </ul>
                    @endguest

                </ul>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script>

         $(document).ready(function(){
            $('.sidenav').sidenav();
            $(".dropdown-trigger").dropdown();

            $('select').formSelect();

        });
    </script>
</body>
</html>
