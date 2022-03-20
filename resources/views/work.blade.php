@extends('layouts.inicio')


  @section('contenido')
  <div class="container">

  	<div class="row">

  		<div class="col-sm-12"><br/></div>
  		<div class="col-sm-12 work-tittle">
  			<h3>¿Que Necesitas para trabajar con nosotros?</h3>
  			<p style="text-align: justify;"><big>Si Tienes una empresa que ofrece el transporte fluvial hacial los distintos destinos de la region y quieres una visualizacion de tu empresa por un medio web con el cual te ofreceremos pasajeros para que realizes aun mas viajes registrate con nosotros adquiere uno de nuestros planes y disfruta de la experiencia</big></p>


  		</div>


  			<div class="col-sm-12">
  				<div class="col-sm-4 work-tittle">
  					<h3>¿Que son los cupos?</h3>
  					<p><big>Los cupos son un tiquete que una persona reserva o compra en alguna de las empresas para poder viajar a alguno de los destinos que la plataforma web ofrece.<br/>
  					La cantidad de cupos que una empresa tiene en la aplicacion equivale a la cantidad de pasajeros que pueden reservar </big></p>
  				</div>

  				<div class="col-sm-4 work-tittle">
  					<h3>¿Como funciona?</h3>
  					<p><big>Elige uno de nustros planes empresariales los cuales te dan unos cupos de reserva para tus pasajeros, la cantidad de cupos que tengas de acuerdo a tu plan es la cantidad de pasajeros que van a poder reservar por la aplicacion</big></p>
  				</div>

  				<div class="col-sm-4 work-tittle">
  					<h3>Elige uno de nuestros planes</h3>
  					<p><big>Cada plan se adapta a las necesidades de tu empresa
  					otorgando cupos para pasajeros dependiendo de la cantidad de personas que reserven en tu empresa por medio de nuestra 
  					plataforma web</big></p>
  				</div>

  				<div class="col-sm-12 nuestros-planes">
  				 <hr>
  				 <h1>NUESTROS PLANES </h1>
  				 </div>
  				<!-- TABLAS DE PRECIOS-->
  				<div class="col-sm-12">
  				<div>
						<div class="tabla-1 tables">
							<div class="price-value">
								<li class="whyt"><a href="#"></a></li>
									<h2><a href="{{ url('basic') }}"> BASICO</a></h2>
									<h5><span>$0</span><lable> / mes</lable></h5>
									<div class="sale-box">
							<span class="on_sale title_shop">NEW</span>
							</div>

							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">5 cupos disponibles </a></li>
								<li><a href="#">Soporte tecnico</a></li>
								<li class="whyt"><a href="#">Notificaciones via E-mail  </a></li>
								<!--<li><a href="#">50GB Monthly Bandwidth </a></li>
								<li class="whyt"><a href="#">Fully Support</a></li>-->
							</ul>
							<div class="cart1">
								<a class="popup-with-zoom-anim" href="{{ url('basic') }}">Registrarse Ahora</a>
							</div>
							</div>
						</div>
						<div class="tabla-2 tables">
							<div class="price-value two">
								<h3><a href="{{ url('standard') }}">STANDARD</a></h3>
								<h5><span>4% del total del pasaje por reserva</span><lable> / mes</lable></h5>
								<div class="sale-box two">
							<span class="on_sale title_shop">NEW</span>
							</div>

							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">10 cupos disponibles </a></li>
								<li><a href="#">Soporte tecnico</a></li>
								<li class="whyt"><a href="#">Notificaciones via E-mail  </a></li>
								<li><a href="#">Notificacion via SMS </a></li>
								<!--<li class="whyt"><a href="#">Fully Support</a></li>-->
							</ul>
							<div class="cart2">
								<a class="popup-with-zoom-anim" href="{{ url('standard') }}">Registrarse Ahora</a>
							</div>
							</div>
						</div>
						<div class="tabla-3 tables">
							<div class="price-value three">
								<h4><a href="{{ url('premium') }}">PREMIUM</a></h4>
								<h5><span>8% de total del pasaje por reserva</span><lable> / mes</lable></h5>
								<div class="sale-box three">
							<span class="on_sale title_shop">NEW</span>
							</div>

							</div>
							<div class="price-bg">
							<ul>
								<li class="whyt"><a href="#">30 cupos disponibles</a></li>
								<li><a href="#">Soporte tecnico</a></li>
								<li class="whyt"><a href="#">Notificaciones via E-mail  </a></li>
								<li><a href="#">Notificacion via SMS </a></li>
								<li class="whyt"><a href="#">Reservas grupales + de 20 personas</a></li>
								
							</ul>
							<div class="cart3">
								<a class="popup-with-zoom-anim" href="{{ url('premium') }}">Registrarse Ahora</a>
							</div>
							</div>
						</div>
							<div class="clear"> </div>


  			</div>
  			</div>




  	</div>
  	

  </div>



@include('layouts.footer')
  @stop