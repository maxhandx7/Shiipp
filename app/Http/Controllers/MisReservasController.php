<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;

class MisReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $email=\Auth::user()->email;
        
        $reservas=\DB::table('reservas')
        ->join('users','reservas.Email_Pasajero','=','users.email')
        ->select('reservas.id','reservas.Destino','reservas.FechaSalida','reservas.HoraSalida','reservas.CC_Pasajero','reservas.Nom_Pasajero','reservas.Ape_Pasajero','reservas.Cupos_reserva','reservas.Empresa')
        ->where([

                ['users.email','=',$email],
                ['reservas.Email_Pasajero','=',$email]

                ])
            ->get();



        $email_emp=\DB::table('reservas')
        ->select('Empresa')
        ->where([
                ['reservas.Email_Pasajero','=',$email]

                ])
        ->get();

        $tel1=0;
        foreach ($email_emp as $k ) {
           $tel1=$k->Empresa;
        }


        $Tel=\DB::table('users')
        ->join('reservas','reservas.Empresa','=','users.name')
        ->select('tel')
        ->where([

                ['users.name','=',$tel1],
                ['reservas.Empresa','=',$tel1]

                ])
        ->get();

        $tel2=0;
        foreach ($Tel as $q ) {

           $tel2=$q->tel;
        }
        return  view('usuarios.reservas-usuarios', compact('reservas','tel2'));
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
        //
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
    public function destroy(Request $request, $id)
    {
        
        $nombre=\Auth::user()->name;
        

        $cupos=\DB::table('destinos')
        ->select('cupos')
        ->where([
            ['Empresa','=',$request['empresa']],
            ['Nombre','=',$request['destino']],
            ['FechaSalida','=',$request['fecha']],
            ['HoraSalida','=',$request['hora']],
        ])
        ->get();

        $cupos_T=$request['cupos'];
        
        foreach ($cupos as $q ) {
        $num=$q->cupos;
        $num1=$num+$cupos_T;

        echo $num1;
        }
        

        $cupos1=\DB::table('destinos')
            ->where([
            ['Empresa','=',$request['empresa']],
            ['Nombre','=',$request['destino']],
            ['FechaSalida','=',$request['fecha']],
            ['HoraSalida','=',$request['hora']],
        ])
            ->update(['Cupos' => $num1]);

          \App\Reservas::destroy($id);
        
        return  Redirect::to('pasenger')->with('message','eliminar');
    }
}
