@extends('layouts.inicio')


  @section('contenido')

<div class="container">
  <div class="row">
      
<?php $a=$query ?>
        @if(count($a) === 0)

      <?php echo '<div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>No se han encontrado viajes</div>';

 ?>

      <script type='text/javascript'>

    function redireccionarPagina() {
      window.location = "{{ url('destinos') }}";
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
         <button class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-whatever="{{$user->HoraSalida}}">Reservar</button>
       </div>



        <!--VENTANA MODAL PARA RESERVAS-->
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><strong>si no tienes cuenta continua para reservar</strong></h4>
      </div>
      
      <div class="modal-footer">
    
    <div id="inner-form" style=" margin-top: 1em;">
  
    {!! Form::open(['route' => 'reservar.store', 'method'=>'POST']) !!}

 <div class="form-group "  >
  
  <div class="col-md-6 col-md-offset-3" style="margin-bottom: 1em">
  {{ Form::submit('Continuar', ['class'=>'form-control btn btn-primary']) }}
</div>

  </div>

                          <div class="form-group">
                            <input type="hidden" name="empresa" value="{{$user->Empresa}}">
                            <input type="hidden" name="destino" value="{{ $user-> Nombre}}">
                            <input type="hidden" name="cupos" value="{{ $user-> Cupos}}">
                            <input type="hidden" name="valor" value="{{ $user-> Valor}}">
                             <input type="hidden" name="mail" value="{{ $user-> email}}">
                             <input type="hidden" name="tel" value="{{ $user-> tel}}">
                          </div>

                          <div class="form-group col-md-6 col-md-offset-3 ">
                            <label class="continuar-reserva" style="margin-bottom: 1em">ingresa para realizar tu reserva</label>
                            {{ Form::button('ingresar', ['class'=>'form-control btn btn-primary','onclick'=>'mostrar()']) }}
                          </div>
                          

                <div id="newDestino" style="display: none">
                        <div class="form-group" style="margin-top: 1em">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"  autofocus>

                            </div>
                        </div>

                        <div class="form-group" >
                            <label for="password" class="col-md-4 control-label" style="margin-top: 1em">Contraseña</label>

                            <div class="col-md-6" style="margin-top: 1em">
                                <input id="password" type="password" class="form-control" name="password" >
                            </div>
                        </div>

                        <div class="form-group">
                          <label  class="col-md-4 control-label" style="margin-top: 1em">Fecha de Salida</label>
                          <div class="col-md-6" style="margin-top: 1em">
                          <input type="date" name="fecha" value="{{$user->FechaSalida}}" class="form-control" readonly="true">
                          </div>
                        </div>

                         <div class="form-group">
                          <label  class="col-md-4 control-label" style="margin-top: 1em">Hora de Salida</label>
                          <div class="col-md-6" style="margin-top: 1em">
                          <input type="time" name="hora" for="recipient-name" class="form-control" id="hora" readonly>
                          </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4" style="margin-top: 1em">
                              {{ Form::submit('Iniciar', ['class'=>'form-control btn btn-primary']) }}
                               
                            </div>
                        </div>

   </div>
   <div class="form-group col-md-6 col-md-offset-3" style="text-align: center">
                            <label class="continuar-reserva" style="margin-bottom: 1em">registrate</label>
                            {{ Form::button('registrarse', ['class'=>'form-control btn btn-primary','onclick'=>'register()']) }}
                          </div>
              {!! Form::close() !!}

    </div>
<script type="text/javascript">
  $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-footer #hora').val(recipient)
})
</script>
    <script type="text/javascript">
  
function mostrar(){
  document.getElementById('newDestino').style.display="block";

}
function register(){
  window.location = "{{ url('register') }}";

}


</script>
  </div>



       </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
      
    </div>
      @endforeach
      @endif 
    
  </div>
</div>


  @include('layouts.footer')

  @stop