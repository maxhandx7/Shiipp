@extends('layouts.inicio')

@section('contenido')
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12" id="contacto">
			<div class="col-sm-1 col-sm-offset-1"></div>
			<div class="col-sm-4">
				{!! Html::image('css/images/email-img.png','mail')!!}
				<!--<img src="css/images/email-img.png">-->
				<div class="text-email">
				<h4>Tienes alguna pregunta?<br/>
				envianos un mensaje</h4>
				<a href="mailto:contactosship@gmail.com">contactosship@gmail.com</a>
				</div>
			</div>
			<div class="col-sm-1 "></div>
			<div class="col-sm-4">
				{!! Html::image('css/images/phone-img.png','telefono')!!}
				<!--<img src="css/images/phone-img.png">-->
				<div class="text-email">
				<h4>Llamanos</h4>
				<p> +(92) 3184022889</p> 
				</div>
				
			</div>

		</div>
		<div class="col-sm-12" id="container-form">
			<div class="col-sm-1 ">
				
			</div>
			<div class="col-sm-4" id="text-message">
				<h3>Escribenos un mensaje!</h3>
				<p>Si tienes alguna pregunta, no dude en enviarnos un mensaje. ¡Respondemos dentro de las 24 horas!</p>
				<div class="redes-sociales col-sm-12">
					<ul>
			<li><a href="https://www.facebook.com/Shiipp-1976419982576286/" class="icon-facebook" target="_Blank"></a></li>
			<li><a href="#" class="icon-instagram" target="_Blank"></a></li>
			<li><a href="mailto:contactosship@gmail.com" class="icon-mail2"></a></li>

		</ul>

				</div>

			</div>
			<div class="col-sm-7" id="formulario">

				{!! Form::open(['route' => 'Enviar.store', 'method'=>'POST']) !!}
					
					<div class="col-sm-4 ">
						<label>Nombre:</label>
						<input type="text" name="nombre" required>
					</div>

					<div class="col-sm-4">
						<label>E-mail:</label>
						<input type="mail" name="mail" required>
					</div>

					<div class="col-sm-4">
						<label>Asunto:</label>
						<input type="text" name="asunto">
					</div>

					<div class="col-sm-12" id="col-mensaje" >
						<label>Mensaje:</label>
						<textarea rows="10" required name="mensaje">
							

						</textarea>

					</div>
					<div class="col-sm-12">

						
						<input type="submit" name="enviar" value="Enviar Mensaje" id="btn-enviar">

					</div>

				{!! Form::close() !!}
			</div>
			<div class="col-sm-1 ">
				
			</div>

		</div>
	</div>
</div>


@include('layouts.footer')
@stop