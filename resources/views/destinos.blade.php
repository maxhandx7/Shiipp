@extends('layouts.inicio')

@section('contenido')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .highlighted {
            background-color: #ffd700;
            color: white;
            border-radius: 50%;
        }
    </style>
    <?php $fecha = date(now()); ?>
    <div class="container">
      <div class="row">
          <div class="thumbnailWrapper col-xs-12">
              @foreach ($destinations as $destination)
                  <div class="col-xs-12 col-sm-6">
                      <a data-toggle="modal" data-target="#myModal{{ $destination->id }}">
                          <div class="imagenWrapper">
                              {!! Html::image($destination->image, $destination->slug) !!}
                              <div class="imageOverlay">
                                  <h2 class="nHotel" id="{{ $destination->slug }}">{{ $destination->name }}</h2>
                                  <h3 class="nDestino">
                                      {{ $destination->description }}
                                  </h3>
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="modal fade" tabindex="-1" role="dialog" id="myModal{{ $destination->id }}">
                      <div class="modal-dialog" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                          aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title">Nueva Reserva</h4>
                              </div>
                              <div class="modal-footer">
                                  {!! Form::open(['route' => 'busqueda.store', 'method' => 'POST']) !!}
                                  <div class="form-group">
                                      {{ Form::label('Fecha de viaje', null) }}
                                      <input type="date" name="fecha-salida" id="fecha-{{ $destination->id }}" class="form-control">
                                      {{ Form::hidden('nombre', $destination->name, ['class' => 'form-control']) }}
                                  </div>
                                  <div class="form-group" id="btn-enviar-fecha">
                                      {{ Form::button('Cerrar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal']) }}
                                      {{ Form::submit('Buscar', ['class' => 'btn btn-primary ']) }}
                                  </div>
                                  {!! Form::close() !!}
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
      @foreach ($destinations as $destination)
          flatpickr("#fecha-{{ $destination->id }}");
          @if (isset($fechasResaltadasPorNombre[$destination->name]))
              const fechasResaltadas{{ $destination->id }} = @json($fechasResaltadasPorNombre[$destination->name]);
              
              flatpickr("#fecha-{{ $destination->id }}", {
                  dateFormat: "Y-m-d",
                  onDayCreate: function(dObj, dStr, fp, dayElem) {
                      const dateStr = dayElem.dateObj.toISOString().split('T')[0];
                      if (fechasResaltadas{{ $destination->id }}.includes(dateStr)) {
                          dayElem.classList.add('highlighted');
                      }
                  }
              });
          @endif
      @endforeach
  </script>
    @include('layouts.footer')
@stop
