@extends('layouts.inicio')


  @section('contenido')

@foreach($res as $user)
  	
<div class="col-md-8 col-md-offset-2" style="margin-top: 2em">

{!! Form::open(['route' => 'booking.store', 'method'=>'POST']) !!}

<!--empresa-->
<div class="form-group">
    {{ Form::hidden('mail', $mail, ['class' => 'form-control','readonly'] ) }}
    {{ Form::hidden('tel', $tel1, ['class' => 'form-control','readonly'] ) }}
  </div>

  <div class="form-group">
    {{ Form::label('Destino', null) }}
    {{ Form::text('nombre', $destino, ['class' => 'form-control','readonly'] ) }}
  </div>
  <div class="form-group">
  	{{ Form::label('Empresa', null) }}
    {{ Form::text('empresa', $empresa ,['class' => 'form-control', 'readonly']) }}
  </div>

  <div class="form-group">
    {{ Form::label('Fecha de salida', null) }}
    {{ Form::date('fecha', $fecha, ['class' => 'form-control','readonly'] ) }}
  </div>

  <div class="form-group">
    {{ Form::label('Hora de salida', null) }}
    {{ Form::time('hora', $hora, ['class' => 'form-control','readonly'] ) }}
  </div>

  <div class="form-group">
    {{ Form::label('Nombre', null) }}
    {{ Form::text('nombrep', $user->name, ['class' => 'form-control','readonly'] ) }}
  </div>

  <div class="form-group">
    {{ Form::label('Apellido', null) }}
    {{ Form::text('apellido', $user->apellido, ['class' => 'form-control','readonly'] ) }}
  </div>

  <div class="form-group">
    {{ Form::label('Cedula', null) }}
    {{ Form::number('cedula', $user->cedula, ['class' => 'form-control','readonly'] ) }}
  </div>

  <div class="form-group">
    {{ Form::label('email', null) }}
    {{ Form::email('email', $user->email, ['class' => 'form-control','readonly'] ) }}
  </div>

  <div class="form-group">
    {{ Form::label('Telefono de contacto', null) }}
    {{ Form::text('tel1', $user->tel, ['class' => 'form-control','required','readonly'] ) }}
  </div>

  <!--<div class="form-group">
    {{ Form::label('Pasajeros', null) }}
    {{ Form::number('pasajeros', null, ['class' => 'form-control','required','max' => $Cupos,'min'=>'0'] ) }}
  </div>-->
  
  <div class="form-group">
    {{ Form::label('Pasajeros', null) }}
  <div class="input-group"> 
    <span class="input-group-btn"> 
     <button class="btn btn-primary" id="descarga" onClick="baja()" type="button"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button> 
    </span> 
    {{ Form::number('pasajeros', $Cupos, ['class' => 'form-control','required','max' => $Cupos,'min'=>'0','id'=>'pasajeros','readonly'] ) }}
    {{ Form::hidden('valor', null, ['class' => 'form-control','required','max' => $Cupos,'min'=>'0','id'=>'valor','readonly'] ) }}
    {{ Form::hidden('uno', $Cupos,['id'=>'cupos']) }}
    <span class="input-group-btn"> 
      <button class="btn btn-primary" id="carga" onClick="sube()" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button> 
    </span> 
   
  </div> 
</div>

  <div class="form-group">
    {{ Form::label('Valor Total a Pagar', null) }}
    {{ Form::number('valor', null, ['class' => 'form-control','readonly','id'=>'total'] ) }}
  </div>

<div class="form-group">
    
    {{ Form::submit('Reservar', ['class'=>'form-control','id'=>'btn-enviar']) }}
  </div>

{!! Form::close() !!}
</div>
@endforeach



<script type="text/javascript">
  function sube(){
  var num = $("#pasajeros").val();
  var num1 = $("#total").val();
  var num2 = $("#valor").val();
  var cupos= $("#cupos").val();

  
  if(num == cupos ){
    $("#pasajeros").val(1);
    $("#total").val(num2);
  }else{
    $("#pasajeros").val(parseInt(num)+1);
    $("#total").val(parseInt(num1)+parseInt(num2));
  } 
}
 
function baja(){
  var num = $("#pasajeros").val();
  var num1 = $("#total").val();
  var num2 = $("#valor").val();
  var cupos= $("#cupos").val();
  
  
  if(num == 1){
    $("#pasajeros").val(parseInt(cupos));
    var pas=$("#pasajeros").val()
    $("#total").val(parseInt(num1) * parseInt(pas));
  }else{
    $("#pasajeros").val(parseInt(num)-1);
    $("#total").val(parseInt(num1)-parseInt(num2));

  }
  
}
</script>
</script>
@include('layouts.footer')

@stop