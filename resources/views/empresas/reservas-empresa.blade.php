@extends('layouts.ingreso')
<?php $message=Session::get('message') ?>



@if($message == 'eliminar')

<div class="alert alert-info" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Reserva Cancelada</div>;
@endif
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            

        <!--SE MUESTRA UN PANEL DE LAS RESERVAS HECHAS HASTA EL MOMENTO INDICANDO DESTINO CLIENTE HORA DE SALIDA PASAJEROS ESTADO -->
        <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h3 id="tittle-reservas-company">Reservas {{ Auth::user()->name }}</h3></div>
  
  <!-- Table -->
  <div class="table-responsive">
  <table class="table">
    <tr>
            <th>Destino</th>
            <th>Cedula Pasajero</th>
            <th>Nombres Pasajero</th>
            <th>Apellidos Pasajero</th>
            <th>Email Pasajero</th>
            <th>Telefono Pasajero</th>
            <th>Pasajeros que Viajan</th>
            <th>Fecha de salida</th>
            <th>Hora de salida</th>
        </tr>

         @foreach($reservas as $user)
      <tbody>
          <tr>
            <th>{{ $user-> Destino}}</th>
            <th>{{ $user-> CC_Pasajero}}</th>
            <th>{{ $user-> Nom_Pasajero}}</th>
            <th>{{ $user-> Ape_Pasajero}}</th>
            <th>{{ $user-> Email_Pasajero}}</th>
            <th>{{ $user-> Tel_Pasajero}}</th>
			      <th>{{ $user-> Cupos_reserva}}</th>
            <th>{{ $user-> FechaSalida}}</th>
            <th>{{ $user-> HoraSalida}}</th>
            <th>
              {!! Form::open(['route' => ['reservas.destroy',$user->id],'method'=>'DELETE']) !!}
              {{ Form::hidden('cupos',$user->Cupos_reserva, ['class'=>'form-control btn btn-primary']) }}
              {{ Form::hidden('destino',$user->Destino, ['class'=>'form-control btn btn-primary']) }}
              {{ Form::hidden('empresa',$user->Destino, ['class'=>'form-control btn btn-primary']) }}
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
 @endsection