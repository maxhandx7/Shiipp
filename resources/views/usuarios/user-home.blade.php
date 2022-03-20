@extends('layouts.pasenger')


@section('content')



<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<br/>
		</div>


		<div class="col-sm-4 col-sm-offset-1">
			<!--<div class="col-sm-8 col-sm-offset-4" style="margin-top: 2em;margin-bottom: 1em  ">
        
			{!! Html::image('css/images/parrot-1.png','elige y compara',array('class'=>'img-circle '))!!}
			</div>-->
			<div class="panel panel-primary" >
				 <div class="panel-heading" style="text-align:center;"><h2>{{ Auth::user()->name }} {{ Auth::user()->apellido }}</h2></div>
  <div class="panel-body">
    <div class="table-responsive">
  <table class="table">
  	<tr>
  		<th><h4>Cedula</h4></th>
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
  <div class="panel-heading"><h3 id="tittle-reservas-company">Viajes que has realilzado</h3></div>
  <!-- Table -->
  <div class="table-responsive">
  <table class="table">
    <tr>
            <th>Destino al que reservas</th>
            <th>Total de viajes</th>
            
    </tr>
    @if(count($total)===0)
          <tr>
            <th colspan="3">Todavia no has realizado una reserva</th>            
          </tr>
     @else
        @foreach($total as $t)

          <tr>
            <th>{{ $t->Destino }}</th>            
            <th>{{ $t->total }}</th>            
            <th><button class="btn btn-primary" disabled="disabled">reclamar</button></th>            
          </tr>

        @endforeach

     @endif     


      </table>

		</div>
	</div>
</div>




@endsection

