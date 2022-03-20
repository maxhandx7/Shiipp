@extends('layouts.pasenger')



@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            

        <!--SE MUESTRA UN PANEL DE LAS RESERVAS HECHAS HASTA EL MOMENTO INDICANDO DESTINO CLIENTE HORA DE SALIDA PASAJEROS ESTADO -->
        <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 id="tittle-reservas-company"> Mis Reservas </h3></div>
  
  <!-- Table -->
  <div class="table-responsive">
  <table class="table">
    <tr>
            <th>Destino</th>
            <th>Cedula Pasajero</th>
            <th>Nombres Pasajero</th>
            <th>Pasajeros que Viajan</th>
            <th>Fecha de salida</th>
            <th>Hora de salida</th>
            <th>Nombre Empresa</th>
            <th>Telefono Empresa</th>
        </tr>

         @foreach($reservas as $user)
      <tbody>
          <tr>
            <th>{{ $user-> Destino}}</th>
            <th>{{ $user-> CC_Pasajero}}</th>
            <th>
            	{{ $user-> Nom_Pasajero}} <br/>
            	{{ $user-> Ape_Pasajero}}
            </th>
            <th>{{ $user-> Cupos_reserva}}</th>
            <th>{{ $user-> FechaSalida}}</th>
            <th>{{ $user-> HoraSalida}}</th>
            <th>{{ $user-> Empresa}}</th>
            <th>{{ $tel2}}</th>
            <th>
              {!! Form::open(['route' => ['mis-reservas.destroy',$user->id],'method'=>'DELETE']) !!}
              {{ Form::hidden('cupos',$user->Cupos_reserva, ['class'=>'form-control btn btn-primary']) }}
              {{ Form::hidden('destino',$user->Destino, ['class'=>'form-control btn btn-primary']) }}
              {{ Form::hidden('empresa',$user->Empresa, ['class'=>'form-control btn btn-primary']) }}
              {{ Form::hidden('fecha',$user->FechaSalida, ['class'=>'form-control btn btn-primary']) }}
              {{ Form::hidden('hora',$user->HoraSalida, ['class'=>'form-control btn btn-primary']) }}
              {{ Form::submit('Cancelar Reserva', ['class'=>'form-control btn btn-primary']) }}
              {!! Form::close() !!}
          </th>
          </tr>
      </tbody>
      @endforeach
  </table>
  </div>
</div>

    
    </div>
</div>

  @include('layouts.footer')

  @stop