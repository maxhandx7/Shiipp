@extends('layouts.ingreso')
<?php $message=Session::get('message') ?>

@if($message == 'hecho')

<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Destino Creado</div>;
@endif

@if($message == 'creado')

<div class="alert alert-warning" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>No se puede sobrepasar los cupos maximos de tu plan</div>;
@endif

@if($message == 'eliminar')

<div class="alert alert-info" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Destino Eliminado</div>;
@endif

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">


<div class="panel panel-default">
          <!-- Panel header-->
 <div class="panel-heading"><h3 id="tittle-reservas-company">Destinos</h3></div>
 <!-- Table -->
  <div class="table-responsive">
  <table class="table">
    <tr>
            <th>Nombre</th>
            <th>Fecha de salida</th>
            <th>Hora de salida</th>
            <th>Cupos Disponibles</th>
            <th>Valor del Pasaje</th>
            
        </tr>
      @foreach($destinos as $user)
      <tbody>
          <tr>
            <th>{{ $user-> Nombre}}</th>
            <th>{{ $user-> FechaSalida}}</th>
            <th>{{ $user-> HoraSalida}}</th>
            <th>{{ $user-> Cupos}}</th>
            <th>{{ $user-> Valor}}</th>
            
         
          <th>
              {!! Form::open(['route' => ['destinos-empresas.destroy',$user->id],'method'=>'DELETE']) !!}
              {{ Form::submit('Eliminar', ['class'=>'form-control btn btn-primary']) }}
              {!! Form::close() !!}
          </th>
          </tr>
      </tbody>
      @endforeach
  </table>

  </div>

 <div id="newDestino" onclick="mostrar()" ondblclick="cerrar()">
  <div id="addDestino">
  <p>Agregar Nuevo Destino</p>
  {!! Html::image('css/images/add.png','añadir destino')!!}
  <!--<img src="css/images/add.png">-->
	</div>
</div>
<div id="inner-form" style="display: none">
  
@include('empresas.nueva')

</div>

</div>
</div>


</div>
</div>

 @include('layouts.footer')
 @endsection
<script type="text/javascript">
  
function mostrar(){
  document.getElementById('inner-form').style.display="block";

}
function cerrar(){
  document.getElementById('inner-form').style.display="none";

}

</script>