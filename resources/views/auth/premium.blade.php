@extends('layouts.register-empresas')

@section('content')
<div class="container">
    <div class="row">
<div class="col-sm-6 col-md-offset-3 work-tittle">
            <h3>¿Que contiene el plan?</h3>
            <p style="text-align: justify;"><big>Este plan te ofrece las siguientes elementos:</big></p>
            <ol><big>
                <li><strong>30 cupos diarios por destino </strong></li>
                <li><strong>Soporte tecnico</strong></li>
                <li><strong>Mensajes de reserva al cliente y al correo registrado</strong></li>
                <li><strong>Agregar cualquier destino que la empresa maneje</strong></li>
                <li><strong>Cancelaciones de las reservas</strong></li>
                <li><strong>Reportes mensuales del total de reservas por mes</strong></li>
                <li><strong>Reservas grupales de mas de 15 personas</strong></li>
                
                </big>
            </ol>

        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" id="seccion-heading">Registrarse en el plan Basico</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre de la empresa</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--<div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="apellido" type="hidden" class="form-control" name="apellido" value="null" required autofocus>

                                @if ($errors->has('apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->
                        
                        <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                            <label for="cedula" class="col-md-4 control-label">Nit</label>

                            <div class="col-md-6">
                                <input id="cedula" type="text" class="form-control" name="cedula" value="{{ old('cedula') }}" required autofocus>

                                @if ($errors->has('cedula'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                            <label for="tel" class="col-md-4 control-label">Telefono de contacto</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control" name="tel" value="{{ old('tel') }}" required>

                                @if ($errors->has('tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <!--<div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Tipo de usuario</label>

                            <div class="col-md-6">
                                <input id="type" type="radio" name="type" value="empresa" required> Empresa

                                <input id="type" type="radio" name="type" value="pasajero" required> Pasajero

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->
                        <div class="form-group">
                            <div class="col-md-6">
                                <input id="type" type="hidden" name="type" value="empresa"> 
                            </div>

                            <div class="col-md-6">
                                <input id="apellido" type="hidden" name="apellido" value="null"> 
                            </div>
                        
                            <div class="col-md-6">
                                <input id="plan" type="hidden" name="plan" value="premium"> 
                            </div>
                        
                            <div class="col-md-6">
                                <input id="estado" type="hidden" name="estado" value="1"> 
                            </div>
                        
                            <div class="col-md-6">
                                <input id="cupos" type="hidden" name="cupos" value="30"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
