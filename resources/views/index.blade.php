@extends('layouts.inicio')


  @section('contenido')
	
  <!--BARRA SOCIAL -->
	<div class="social-bar">
		<ul>
			<li><a href="https://www.facebook.com/Shiipp-1976419982576286/" class="icon-facebook" target="_Blank"></a></li>
			<li><a href="#" class="icon-instagram"></a></li>
			<li><a href="mailto:contactosship@gmail.com" class="icon-mail2"></a></li>

		</ul>

	</div>
<!-- FIN BARRA SOCIAL-->


	

<!--INICIO BANER PRINCIPAL-->
<div class="jumbotron">
	<div>
  <h2>LA MAYORIA DE PERSONAS  </br>
   	  GASTAN TIEMPO Y ENERGIA... </br> 
	  NO LO HAGAS MÁS</h2>
  <p id="banner-text">Ingresa y reserva tu pasaje</p>
  <p><a class="btn btn-primary btn-lg" href="destinos" role="button">COMIENZA A RESERVAR</a></p>
  </div>
  <a href="#seccion-logos" class="down-arrow">
    {!! Html::image('css/images/arrow-down.png','arrow')!!}
    <!--<img src="css/images/arrow-down.png"  >--></a>
</div>

<!--FIN BANNER -->

<!-- INICIO SECCION DE LOGOS-->
<p id="seccion-logos"></p>
<div class="row seccion-logos" >
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail">
      {!! Html::image('css/images/laptop-1.png','elige y compara',array('class'=>'animate-img-home'))!!}
     <!-- <img src="css/images/laptop-1.png" alt="elige y compara" class="animate-img-home">-->
      <div class="caption">
        <h3>ELIJE Y COMPARA</h3>
        <p>Elige y compara entre los distintos tipos de transporte de cabotaje y sus diferentes precios, para que puedas escoger tu mejor opción</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      {!! Html::image('css/images/parrot-1.png','Disfruta del pacifico',array('class'=>'animate-img-home'))!!}
      <!--<img src="css/images/parrot-1.png" alt="Disfruta del pacifico" class="animate-img-home">-->
      <div class="caption">
        <h3>DISFRUTA DEL PÁCIFICO</h3>
        <p>Disfruta de los más de 10 destinos
que <strong>Shiipp</strong> te ofrece, para que vivas la mejor experiencia del pácifico</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
       {!! Html::image('css/images/victory-1.png','confianza y responsabilidad',array('class'=>'animate-img-home'))!!}
     <!-- <img src="css/images/victory-1.png" alt="confianza y responsabilidad" class="animate-img-home">-->
      <div class="caption">
        <h3>CONFIANZA Y RESPONSABILIDAD</h3>
        <p>Pon tu confianza en <strong>Shiipp</strong> asegura tu reserva te ahorra tiempo y se responsabiliza de que llegues a tu destino</p>
        
      </div>
    </div>
  </div>
</div>

<!-- FIN DE SECCION DE LOGOS-->


<div class="col-sm-12" id="work-with-us">
  
  <div class="col-sm-4 col-sm-offset-2">
     <h2 id="tittle-work" style="color: #333333">Trabaja con nosotros</h2>
     <p id="text-work" style="color: #333333"> Si quieres agregar tu empresa de reservas 
     con nuestra aplicacion puedes hacerlo solo registrate como
     empresa y empieza a añadir todos tus destinos  </p>
     <a class="btn button-work btn-lg" id="btn-consulta" href="trabaja-con-nosotros" role="button" style="color: #333333">CONSULTA COMO</a>

  </div>
  <div class="col-sm-6">

    {!! Html::image('css/images/computador.png','work with us',array('id'=>'img-work'))!!}
    <!--<img src="css/images/computador.png"   id="img-work">-->
  
</div>
</div>


<!-- INICIO  SECCION DE MOCKUPS-->
  <div class="col-sm-12" id="mockup" style="color: #333333">
  <h2>Vive una experiencia diferente</h2>
  <section >

<div class="container-fluid" style="color: #333333">
    <div class="row" id="maito">

      <div class="col-sm-6 col-xs-12">
      <div class="col-md-8 col-xs-9" id="l1"><h3>Reserva donde quieras <p>¡Ya no tendrás que esperar para hacer una consulta o reservar en alguna de las empresas del muelle turistico! ¡Ahora puedes hacerlo en cualquier momento y desde cualquier lugar!.</p> </h3></div>
      <div class="col-md-4 col-xs-3" id="icon-1"><h1><span class="glyphicon glyphicon-phone"></span></h1></div>
      </div>

      <div class="col-sm-6 col-xs-12">
      <div class="col-md-4 col-xs-3" id="icon-2"><h1><span class="glyphicon glyphicon-calendar"></span></h1></div>
      <div class="col-md-8 col-xs-9" id="l2"><h3>Reserva a cualquier hora <p>No importa cuando quieras reservar, a cualquier hora lo puedes hacer con shiipp.<br/><br/></p> </h3></div>
    </div>
      

    <!-- -------------------------- -->
<div class="row" id="maito">
      
      <div class="col-sm-6 col-xs-12">
      <div class="col-md-8 col-xs-9" id="l1"><h3>Encuentra el mejor precio <p>Elige tu mejor economia al comparar los precios de las diferentes empresas que ofrecen destinos. </p> </h3> </div>
      <div class="col-md-4 col-xs-3 icon-3-6"><h1><span class="glyphicon glyphicon-usd"></span></h1></div>
      </div>

      <div class="col-sm-6 col-xs-12">
      <div class="col-md-4 col-xs-3 icon-3-6"><h1><span class="glyphicon glyphicon-envelope"></span></h1></div>      
      <div class="col-md-8 col-xs-9" id="l2"><h3>Recibe notificaciones<p>Encuentrate al dia de los nuevos eventos que ocurran con tu reserva recibiendo notificaciones y recordatorios de reservas.</p> </h3> </div>
    </div>
    </div>

    

    <!------------------------------>
    
   <div class="row" id="maito">

      <div class="col-sm-6 col-xs-12">
      <div class="col-md-8 col-xs-9" id="l1"><h3>Maneja tus reservas<p>Toma tus propias deciciones con tus reservas ya que puedes cancelar y volver a reservar al destino que tu quieras. </p> </h3></div>
      <div class="col-md-4 col-xs-3 icon-3-6"><h1><span class="glyphicon glyphicon-user"></span></h1></div>
      </div>

      <div class="col-sm-6 col-xs-12">
      <div class="col-md-4 col-xs-3 icon-3-6"><h1><span class="glyphicon glyphicon-heart"></span></h1></div>
      <div class="col-md-8 col-xs-9" id="l2"><h3>Disfruta tu viaje <p>Despues de haber reservado y pagado el cupo solo te queda disfrutar de la experiencia del vieje, reservaste con shiipp ahora solo disfruta nosotros te ahorramos tiempo y esfuerzo.</p> </h3></div>
    </div>
    </div>
    </div>
</section>
    </div>
<!-- FIN DE SECCION DE MOCKUPS-->

@include('layouts.footer')

@stop