@extends('layouts.inicio')

@section('contenido')



 <?php $fecha=date(now()) ?>
 <!--SE MUESTRAN LOS DESTINOS PARA QUE EL PASAJERO RESERVE -->
         <div class="container">
  <!-- DESTINOS-->
     
      <div class="row">

        <div class="thumbnailWrapper col-xs-12">

          <!-- FILA IZQUIERDA DESTINOS-->
        <div class="col-xs-12 col-sm-6">
    <a data-toggle="modal" data-target="#myModal" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/Ladrilleros-01.png','Ladrilleros')!!}
        <!--<img src="css/images/Ladrilleros-01.png" alt="Ladrilleros">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="Juanchaco">Juanchaco y ladrilleros</h2>
          <h3 class="nDestino">
            Buenaventura, Colombia
            
          </h3>
        </div>
      </div>
    </a>
  </div>

  <!-- FILA DERECHA DESTINOS-->
  <div class="col-xs-12 col-sm-6">
    <a data-toggle="modal" data-target="#myModal1" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/La-Bocana-01.png','La Bocana')!!}
        <!--<img src="css/images/La-Bocana-01.png" alt="La Bocana">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="bocana">La Bocana</h2>
          <h3 class="nDestino">
            Buenaventura, Colombia
          </h3>
        </div>
      </div>
    </a>
  </div>

          <!-- FILA IZQUIERDA DESTINOS-->
        <div class="col-xs-12 col-sm-6">
    <a data-toggle="modal" data-target="#myModal2" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/Bahia-malaga.png','Bahia Malaga')!!}
        <!--<img src="css/images/Bahia-malaga.png" alt="Bahia Malaga">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="malaga">Bahia Malaga</h2>
          <h3 class="nDestino">
            Buenaventura, Colombia
            
          </h3>
        </div>
      </div>
    </a>
  </div>

  <!-- FILA DERECHA DESTINOS-->
  <div class="col-xs-12 col-sm-6">
   <a data-toggle="modal" data-target="#myModal3" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/maguipi.png','Maguipi')!!}
        <!--<img src="css/images/maguipi.png" alt="Maguipi">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="maguipi">Maguipi</h2>
          <h3 class="nDestino">
            Buenaventura, Colombia
          </h3>
        </div>
      </div>
    </a>
  </div>

   <!-- FILA IZQUIERDA DESTINOS-->
        <div class="col-xs-12 col-sm-6">
    <a data-toggle="modal" data-target="#myModal4" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/pianguita.png','Pianguita')!!}
        <!--<img src="css/images/pianguita.png" alt="Pianguita">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="pianguita">Pianguita</h2>
          <h3 class="nDestino">
            Buenaventura, Colombia
            
          </h3>
        </div>
      </div>
    </a>
  </div>


  <!-- FILA DERECHA DESTINOS-->
  <div class="col-xs-12 col-sm-6">
   <a data-toggle="modal" data-target="#myModal5" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/guapi-01.jpg','guapi')!!}
        <!--<img src="css/images/maguipi.png" alt="Maguipi">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="maguipi">Guapi</h2>
          <h3 class="nDestino">
            Cauca, Colombia
          </h3>
        </div>
      </div>
    </a>
  </div>

  <!-- FILA IZQUIERDA DESTINOS-->
        <div class="col-xs-12 col-sm-6">
    <a data-toggle="modal" data-target="#myModal6" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/Bahia-solano-01.png','Bahia Solano')!!}
        <!--<img src="css/images/pianguita.png" alt="Pianguita">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="pianguita">Bahía Solano</h2>
          <h3 class="nDestino">
            Choco, Colombia
            
          </h3>
        </div>
      </div>
    </a>
  </div>

   <!-- FILA DERECHA DESTINOS-->
  <div class="col-xs-12 col-sm-6">
   <a data-toggle="modal" data-target="#myModal7" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/El-charco-01.png','El Charco')!!}
        <!--<img src="css/images/maguipi.png" alt="Maguipi">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="maguipi">El Charco</h2>
          <h3 class="nDestino">
            Nariño, Colombia
          </h3>
        </div>
      </div>
    </a>
  </div>

  <!-- FILA IZQUIERDA DESTINOS-->
        <div class="col-xs-12 col-sm-6">
    <a data-toggle="modal" data-target="#myModal8" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/Timbiqui-01.png','Timbiquí')!!}
        <!--<img src="css/images/pianguita.png" alt="Pianguita">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="pianguita">Timbiquí</h2>
          <h3 class="nDestino">
            Cauca, Colombia
            
          </h3>
        </div>
      </div>
    </a>
  </div>

   <!-- FILA DERECHA DESTINOS-->
  <div class="col-xs-12 col-sm-6">
   <a data-toggle="modal" data-target="#myModal9" >
      <div class="imagenWrapper">
        {!! Html::image('css/images/Satinga-01.png','Satinga')!!}
        <!--<img src="css/images/maguipi.png" alt="Maguipi">-->
        <div class="imageOverlay">
          <h2 class="nHotel" id="maguipi">Satinga</h2>
          <h3 class="nDestino">
            Nariño, Colombia
          </h3>
        </div>
      </div>
    </a>
  </div>

<!--FIN FILA DESTINOS -->

</div>
      
</div>
</div>

<!--VENTANA MODAL juanchaco-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Nueva Reserva</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
   
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' >" ?>
    {{ Form::hidden('nombre', 'juanchaco', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary ']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--VENTANA MODAL bocana-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
   <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('nombre', 'Bocana', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--VENTANA MODAL bahia malaga-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('nombre', 'Bahia Malaga', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--VENTANA MODAL maguipi-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal3">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('destino', 'Maguipi', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--VENTANA MODAL pianguita-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal4">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('nombre', 'Pianguita', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--VENTANA MODAL GUAPI-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal5">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('nombre', 'Guapi', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--VENTANA MODAL BAHIA SOLANO-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal6">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('nombre', 'Bahia Solano', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--VENTANA MODAL El CHARCO-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal7">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('nombre', 'El Charco', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--VENTANA MODAL TIMBIQUI-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal8">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('nombre', 'Timbiqui', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--VENTANA MODAL SATINGA-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal9">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Fecha del viaje</h4>
      </div>
      
      <div class="modal-footer">

{!! Form::open(['route' => 'Busqueda.store', 'method'=>'POST']) !!}
  <div class="form-group">
    {{ Form::label('Fecha de viaje', null) }}
    <?php echo"<input type='date' name='fecha-salida' class='form-control' required min=$fecha >" ?>
    {{ Form::hidden('nombre', 'Satinga', ['class' => 'form-control'] ) }}
  </div>

<div class="form-group" id="btn-enviar-fecha">
    {{ Form::button('Cerrar', ['class'=>'btn btn-default','data-dismiss'=>'modal']) }}
    {{ Form::submit('Buscar', ['class'=>'btn btn-primary']) }}
  </div>

{!! Form::close() !!}
       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--GRUPOS
<div class="col-md-12" style="background-color: #fff; padding: 10px 0px;margin-top: 2em;">
              
              <div class="col-md-12">
              <h3  style="text-align: center;"> Planes Grupales Para Reservas de mas de 15 personas </h3>
               <a href="" class="col-md-6 col-md-offset-3 col-sm-6 btn btn-primary btn-lg ingresa" > Ingresa Aquí</a>
               </div>
            </div>
            -->
@include('layouts.footer')

@stop