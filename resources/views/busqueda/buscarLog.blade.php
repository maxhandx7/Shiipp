@extends('layouts.pasenger')


  @section('content')

<div class="container">
  <div class="row">
      
<?php $a=$query ?>
        @if(count($a) === 0)

      <?php echo '<div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>No se han encontrado viajes</div>';

          ?>
           <script type='text/javascript'>

    function redireccionarPagina() {
      window.location = "{{ url('pasenger') }}";
    }
      setTimeout('redireccionarPagina()', 3000);


      </script>
      @else
      @foreach($a as $user)


      <div class="col-md-12" style="margin-top: 2em">

       <div class="col-md-1 space-row-buscar">
        
       </div>
       <div class="col-md-2">
        <h3 class="title-empresas-reservas">{{ $user-> Nombre}}</h4>
        <p class="text-empresa">{{ $user-> Empresa}}</p>
       </div>

       <div class="col-md-5 space-row-buscar">
       <dl style="margin-top: 5px;">
        <dt>Fecha Salida:</dt>
        <dt>{{ $user-> FechaSalida}}</dt>
        <dt>Hora Salida:</dt>
        <dt>{{ $user-> HoraSalida}}</dt>
        <dt>Cupos:</dt>
        <dt>{{ $user-> Cupos}}</dt>
       </dl>
       </div>


       <div class="col-md-3 space-row-buscar">
        <h2 style="color: #337ab7; border-bottom: 1px solid rgba(0, 0, 0, 0.1); padding-bottom: 20px; text-align: center;"><sup>$</sup>{{ $user-> Valor}}</h2>

        {!! Form::open(['route' => 'reservarLog.store', 'method'=>'POST']) !!}


                          <div class="form-group">
                            <input type="hidden" name="empresa" value="{{$user->Empresa}}">
                            <input type="hidden" name="destino" value="{{ $user-> Nombre}}">
                            <input type="hidden" name="cupos" value="{{ $user-> Cupos}}">
                            <input type="hidden" name="valor" value="{{ $user-> Valor}}">
                             <input type="hidden" name="mail" value="{{ $user-> email}}">
                             <input type="hidden" name="tel" value="{{ $user-> tel}}">
                             <input type="hidden" name="fecha" value="{{ $user->FechaSalida}}">
                             <input type="hidden" name="hora" value="{{ $user->HoraSalida}}">
                          </div>

                        <div class="form-group">
                            <div class="col-md-12">
                              {{ Form::submit('Reservar', ['class'=>'form-control btn btn-primary']) }}
                               
                            </div>
                        </div>
   
              {!! Form::close() !!}
        



      
    </div>
      @endforeach
      @endif 
    
  </div>
</div>


  @include('layouts.footer')

  @stop