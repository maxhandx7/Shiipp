@extends('layouts.ingreso')


@section('content')
<?php $message=Session::get('message') ?>

@if($message == 'creado')

<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Datos actualizados correctamente</div>;
@endif

<?php $state= Auth::user()->estado; ?>
@if( $state=1)
    
    <?php $estado="activo"; ?>

@else

<?php $estado="inactivo"; ?>

@endif

<!--<script type="text/javascript">
    window.location = "{{ url('/reservas') }}";
</script>-->

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<br/>
		</div>


		<div class="col-sm-4 col-sm-offset-1">
			<!--<div class="col-sm-12" style="margin:2em auto;text-align: center; ">
			{!! Html::image('css/images/laptop-1.png','elige y compara',array('class'=>'img-circle '))!!}
			</div>-->
			<div class="panel panel-primary" >
				 <div class="panel-heading" style="text-align:center;"><h2>{{ Auth::user()->name }}</h2></div>
  <div class="panel-body">

    <div class="table-responsive">
  <table class="table">
  	<tr>
  		<th><h4>Nit</h4></th>
  		<th><h4>{{ Auth::user()->cedula }}</h4></th>
  	</tr>
  	<tr>
  		<th><h4>Telefono</h4></th>
  		<th><h4>{{ Auth::user()->tel }}</h4></th>
  	</tr>
  	<tr>
  		<th><h4>Email</h4></th>
  		<th><h4>{{ Auth::user()->email }}</h4></th>
  	</tr>
    <tr>
      <th><h4>Plan</h4></th>
      <th><h4>{{ Auth::user()->plan }}</h4></th>
    </tr>
    <tr>
      <th><h4>Estado</h4></th>
      <th><h4>{{$estado}}</h4></th>
    </tr>

  </table>
</div>
<div class="col-sm-12 form-group">
{!! link_to_route('Configuracion.edit', $title = 'Actualizar informacion', $parameters = Auth::user()->id, $attributes = ['class'=>"btn btn-primary form-control"])!!}
</div>
  </div>

			</div>
			

		</div>

		<div class="col-sm-6 col-sm-offset-1">
			<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 id="tittle-reservas-company">Registro de reservas por mes</h3>

  @include('empresas.historial')

</div>
	</div>
</div>




@endsection

