<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#empresa {
    text-transform: uppercase;
}
	</style>
</head>

<body>
	
	<h1>Has reservado por Shipp a continuacion te damos un detalle de tu reserva:</h1>
	<p><strong>Destino al que reservo: </strong> {!! $nombre !!}</p>
	<p><strong>Fecha de salida: </strong> {!! $fecha !!}</p>
	<p><strong>Hora de salida: </strong> {!! $hora !!}</p>
	<p><strong>Empresa por la que reservo: </strong> <span  id="empresa"> {!! $empresa !!}</span></p>
	<p><strong>Pasajeros que viajan: </strong> {!! $pasajeros !!}</p>
	<p><strong>Valor pasaje total a pagar: </strong> {!! $valor !!}</p>

	<h3>Recuerde llegar a la ubicacion de la empresa la cual se encuentra <br/>
	en el muelle turistico y pagar su pasaje para disfrutar un buen viaje.</h3>
	<h3>Si deseas hacer una cancelacion de la reserva si tienes cuenta en la <br/>
		plataforma podras hacerlo con 4 horas de anticipacion si no comunicate con <br/>
		la empresa <span  id="empresa"> {!! $empresa !!}</span> al numero {!! $tel !!}</h3>
		

</body>
</html>