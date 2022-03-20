<!DOCTYPE html>
<html>
<head>
	<title>Shiipp</title>
	
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
{!! Html::style('css/style.css') !!}
  <link rel='stylesheet' type='text/css' href='css/style.css'>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

{!! Html::style('css/fonts.css') !!}
<link rel="stylesheet" type="text/css" href="css/fonts.css">

{!! Html::favicon('css/images/logo-app-favicon.png') !!}
<link rel="icon" type="image/png" href="css/images/logo-app-favicon.png" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var cambio = false;
        var headerHeight=$('nav').outerHeight();
        $('.nav li a').each(function(index) {
            if(this.href.trim() == window.location){
                $(this).parent().addClass("active");
                cambio = true;
            }
        });
        if(!cambio){
            $('.nav li:first').addClass("active");
        }
         

         $('.down-arrow').click(function(e){
            
            var linkHref = $(this).attr('href');
            
            $('html, body').animate({

              scrollTop: $(linkHref).offset().top - headerHeight
            }, 1000);

            e.preventDefault();


        });

         
    });

    

</script>
	
</head>
<body>
<body>
    <!--Navegacion -->
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

                    <!-- Branding Image -->
                    <a  href="{{ url('/inicio') }}">
                       <!-- {{ config('app.name', 'Laravel') }}-->

                    
                    {!! Html::image('css/images/logo-app-1.png','Brand')!!}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" id="menu-seccion">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ url('inicio') }}"><span class="icon-home"></span>Inicio</a></li>
        <li ><a href="{{ url('como-reservar') }}" >Como Reservar</a></li>
         <li ><a href="{{ url('destinos') }}" >Destinos</a></li>

         <li ><a href="{{ url('trabaja-con-nosotros') }}" >Trabaja con nosotros</a></li>
        <li ><a href="{{ url('blog') }}">Blog</a></li>
        
        
        <li>
          <a href="{{ url('login') }}" class="btn btn-default" id="boton-iniciar">Iniciar Sesión </a>
          
        </li>
        
        <li><a href="{{ url('contactanos') }}">Contactanos</a></li>
                        @else
<li><a href="{{ url('inicio') }}"><span class="icon-home"></span>Inicio</a></li>
        <li ><a href="{{ url('como-reservar') }}" >Como Reservar</a></li>
         <li ><a href="{{ url('destinos') }}" >Destinos</a></li>

         <li ><a href="{{ url('trabaja-con-nosotros') }}" >Trabaja con nosotros</a></li>
        <li ><a href="{{ url('blog') }}">Blog</a></li>
                
        <li><a href="{{ url('contactanos') }}">Contactanos</a></li>
                                                     


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{url('home') }}">
                                            <span class="icon-user icono"></span>
                                            Perfil
                                        </a>

                                    </li>
                                    <li>
                                        
                                        <div class="config">
                                            <span class="icon-cogs"></span>
                                        {!! link_to_route('Configuracion.edit', $title = 'Configuracion', $parameters = Auth::user()->id, $attributes = ['class'=>'a'])!!}
                                        
                                        </div>
                                        
                                        

                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
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

      
       

	
<!--FIN DE NAVEGACION-->


@yield('contenido')
</div>

</body>

</html>
