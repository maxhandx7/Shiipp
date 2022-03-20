
@extends('layouts.ingreso')

@section('content')
@if(count($histo)===0)

      <?php echo '<div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>No se han encontrado reservas en el mes</div>';

          ?>
           <script type='text/javascript'>

    function redireccionarPagina() {
      window.location = "{{ url('home') }}";
    }
      setTimeout('redireccionarPagina()', 2000);


      </script>
      @else
<?php 
$fech="";

if ($fecha===1){
    $fech="Enero";
}
if ($fecha===2){
    $fech="Febrero";
}
if ($fecha===3){
    $fech="Marzo";
}
if ($fecha===4){
    $fech="Abril";
}
if ($fecha===5){
    $fech="Mayo";
}
if ($fecha===6){
    $fech="Junio";
}
if ($fecha===7){
    $fech="Julio";
}
if ($fecha===8){
    $fech="Agosto";
}
if ($fecha===9){
    $fech="Septiembre";
}
if ($fecha===10){
    $fech="Octubre";
}
if ($fecha===11){
    $fech="Noviembre";
}
if ($fecha===12){
    $fech="Diciembre";
}
?>
<div class="container">
  <div class="row">
    
    <div id="total-historial">
    <p >Total de reservas en el mes: {{$total1}}</p>
    </div>
<!-- Table -->
  <div class="table-responsive">
  <table class="table table-striped" id="historial">
    <thead>
    <tr>
            <th>Mes de reserva</th>
            <th>Destino al que reservan</th>
            <th>Total de resesrvas</th>
        </tr>

       </thead>  
      <tbody>
        @foreach($histo as $h)
          <tr>
            <th> {{$fech}} </th>
            <th>{{ $h->Destino }}</th>
            <th>{{ $h->total }}</th>
            
          </tr>
          @endforeach
      </tbody>
  </table>

<div class="col-sm-6 col-sm-offset-4">
  <a href="{{ url('home')}}" id="btn-regresar" class="col-sm-6" >Regresar</a>
 </div> 
 
  @include('layouts.footer')
 @endsection
  </div>
 </div>
 @endif