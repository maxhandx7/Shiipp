 
{!! Form::open(['route' => 'destinos-empresas.store', 'method'=>'POST']) !!}
 <?php $fecha=date(now());
      $cupos=\Auth::user()->cupos;
  ?>
  <div class="form-group">
    {{ Form::label('Destino', null) }}
    {{ Form::select('nombre', array('Juanchaco' => 'Juanchaco y Ladrilleros', 'Bocana' => 'La Bocana','Bahia Malaga' => 'Bahia Malaga','Maguipi' => 'Maguipi','Pianguita' => 'Pianguita','Guapi' => 'Guapi','Bahia Solano' => 'Bahia Solano','El Charco' => 'El Charco','Timbiqui' => 'Timbiqui','Satinga' => 'Satinga',), null, ['class' => 'form-control'] ) }}
  </div>
  
  
  
  
  

  <div class="form-group">
    {{ Form::hidden('empresa', Auth::user()->name  ) }}
  </div>

  <div class="form-group">
    {{ Form::label('Fecha de salida', null) }}

    <?php echo"<input type='date' name='fecha' class='form-control' required min=$fecha >" ?>
  </div>

  <div class="form-group">
    {{ Form::label('Hora de salida', null) }}
    {{ Form::time('hora', null, ['class' => 'form-control','required'] ) }}
  </div>

  <div class="form-group">
    {{ Form::label('Cupos disponibles', null) }}
  <div class="input-group"> 
    <span class="input-group-btn"> 
     <button class="btn btn-primary" id="descarga" onClick="baja()" type="button"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button> 
    </span> 
    {{ Form::number('cupos', 1, ['class' => 'form-control','required','max' => 5,'min'=>'0','id'=>'pasajeros','readonly'] ) }}
    {{ Form::hidden('valor', null, ['class' => 'form-control','required','max' => 5,'min'=>'0','id'=>'valor','readonly'] ) }}
    {{ Form::hidden('uno', $cupos,['id'=>'cupos']) }}
    <span class="input-group-btn"> 
      <button class="btn btn-primary" id="carga" onClick="sube()" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button> 
    </span> 
   
  </div> 
</div>

  <div class="form-group">
    {{ Form::label('Valor del pasaje', null) }}
    {{ Form::number('valor', null, ['class' => 'form-control','min'=>'0','required'] ) }}
  </div>

<div class="form-group">
    
    {{ Form::submit('Agregar destino', ['class'=>'form-control','id'=>'btn-enviar']) }}
    
  </div>

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
{!! Form::close() !!}
