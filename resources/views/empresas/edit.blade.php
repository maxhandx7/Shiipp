@extends('layouts.ingreso')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
{!! Form::model($user,['route' => ['Configuracion.update',$user->id], 'method'=>'PUT']) !!}

 <div class="form-group">
    {{ Form::label('nombre', null) }}
    {{ Form::text('name', null, ['class' => 'form-control'] ) }}
  </div>
  <div class="form-group">
    {{ Form::label('Nit ó Cedula', null) }}
    {{ Form::text('cedula', null, ['class' => 'form-control'] ) }}
  </div>
  <div class="form-group">
  	{{ Form::label('Telefono', null) }}
    {{ Form::text('tel', null ,['class' => 'form-control']) }}
  </div>
  <div class="form-group">
  	{{ Form::label('Email', null) }}
    {{ Form::text('email', null ,['class' => 'form-control']) }}
  </div>

  <div class="form-group">
    
    {{ Form::submit('Actualizar', ['class'=>'form-control','id'=>'btn-enviar']) }}
  </div>
<div class="form-group">
    
    {!! link_to_route('home', $title = 'Regresar', $parameters ='' , $attributes = ['class'=>'btn btn-primary','style'=>'width:100%'])!!}
    
  </div>
{!! Form::close() !!}
</div>
</div>
</div>
@endsection
