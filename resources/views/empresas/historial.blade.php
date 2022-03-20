{!! Form::open(['route' => 'historial.store', 'method'=>'POST']) !!}
<div class="form-group label-historial">
    {{ Form::label('Seleciona el mes que deseas consultar', null) }}
    {{ Form::select('mes', array('1' => 'Enero', '2' => 'Febrero','3' => 'Marzo','4' => 'Abril','5' => 'Mayo','6' => 'Junio','7' => 'Julio','8' => 'Agosto','9' => 'Septiembre','10' => 'Octubre','11' => 'Noviembre','12' => 'Diciembre'), null, ['class' => 'form-control'] ) }}
  </div>
  <div class="form-group">
    
    {{ Form::submit('Buscar', ['class'=>'form-control','id'=>'btn-enviar','name'=>'historial']) }}
    
  </div>
  {!! Form::close() !!}