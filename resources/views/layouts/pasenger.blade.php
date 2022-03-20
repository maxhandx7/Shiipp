<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {!! Html::favicon('css/images/logo-app-favicon.png') !!}
    <link rel="icon" type="image/png" href="css/images/logo-app-favicon.png" />
    {!! Html::style('css/style.css') !!}
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    {!! Html::style('css/fonts.css') !!}
    <link rel='stylesheet' type='text/css' href='css/fonts.css'>

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image 
                    <a class="navbar-brand" href="{{ url('/inicio') }}">
                        {{ config('app.name', 'Laravel') }}

                    </a>-->
                    {!! Html::image('css/images/logo-app-1.png','Brand')!!}
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" id="menu-seccion">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Iniciar Sección</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                        <li role="presentation"> <a href="{{ url('user-home') }}">Inicio</a></li>
                         <li role="presentation"> <a href="{{route('pasenger') }}">Destinos</a></li>
                            <li role="presentation"> <a href="{{url('mis-reservas')}}">Mis Reservas</a></li>
                            
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <div class="config">
                                            <span class="icon-user"></span>
                                        {!! link_to_route('Configuracion.edit', $title = ' Mi cuenta', $parameters = Auth::user()->id, $attributes = ['class'=>'a'])!!}
                                        
                                        </div>
                                       

                                    </li>
                                    <li>
                                       
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Salir
                                            <span class="icon-exit icono"></span>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
