@extends('layouts.inicio')

@section('contenido')

<div class="col-md-9 col-md-offset-1" style="text-align: center;color:#1B7BA5 ">
	
	<h2>Reserva en 4 sencillos pasos</h2>
	<p></br></p>

<!--<img src="css/images/timeline-shiipp.png">-->
<img src="css/images/timeline-shiipp.png" alt="" width="1000" height="808" style="width: 100%;height: auto" usemap="#Map"/>
<map name="Map">
  <area shape="circle" coords="700,123,17" href="{{url('destinos')}}">
</map>

</div>


@include('layouts.footer')
@stop