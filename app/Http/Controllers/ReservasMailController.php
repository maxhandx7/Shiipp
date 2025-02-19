<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;


class ReservasMailController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {   
        //Se carga en la tabla de reservas una nueva reserva
        \App\Reservas::create([
            'Destino'=>$request['nombre'],
            'Empresa'=>$request['empresa'],
            'FechaSalida'=>$request['fecha'],
            'HoraSalida'=>$request['hora'],
            'CC_Pasajero'=>$request['cedula'],
            'Nom_Pasajero'=>$request['nombrep'],
            'Ape_Pasajero'=>$request['apellido'],
            'Email_Pasajero'=>$request['email'],
            'Tel_Pasajero'=>$request['tel1'],
            'Cupos_reserva'=>$request['pasajeros'],
        ]);

        //FALTA INSERTAR EN UNA TABLA DE RESERVA USUARIO REGISTRADO
        //

        //se disminuyen los cupos disponibles de la empresa
        //en la que reservaron

        //Selecciono los cupos que hay en el momento
        
        $query = \DB::table('destinos')->select('cupos')
         ->where([
                 ['Empresa','=',$request ['empresa']],
                 ['FechaSalida','=',$request ['fecha']],
                 ['HoraSalida','=',$request ['hora']],
           
        ])
        ->get();

        //resto los cupos que reservo con los los disponibles
    $cupos=$request['pasajeros'];
        foreach ($query as $q ) {
        $num=$q->cupos;
        $num1=$num-$cupos;
        
    }

    //actualizo la tabla con los resultados
    $total_Cupos=\DB::table('destinos')
            ->where([
                ['Nombre','=',$request['nombre']],
                ['Empresa','=',$request ['empresa']],
                ['FechaSalida','=',$request ['fecha']],
                ['HoraSalida','=',$request ['hora']],

        ])
            ->update(['Cupos' => $num1]);

        //envio mensajes

        $empresa = $request['mail'];
        $usuario = $request['email'];

       
       /* Mail::send('contact.reserva',$request->all(), function($msj) use($empresa){
            
            $msj->subject('Nueva reserva');
            $msj->to($empresa);
            $msj->from('contactosship@gmail.com');

        });
       Mail::send('contact.mensaje',$request->all(), function($msj) use ($usuario){

            $msj->subject('Nueva reserva');
            $msj->to($usuario);
            $msj->from('contactosship@gmail.com');


        }); */
       
if (\Auth::check()) {
    echo '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Has reservado con exito revisa tu correo para detalles de la reserva</div>';


        return view('pasenger'); 
}
else{
       echo '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Has reservado con exito revisa tu correo para detalles de la reserva</div>';


        return view('destinos'); 
       
}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
