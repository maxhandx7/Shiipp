<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class ReservaEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre=\Auth::user()->name;
        $reservas=\DB::table('reservas')
        ->join('users','reservas.Empresa','=','users.name')
        ->select('reservas.id','reservas.Destino','reservas.FechaSalida','reservas.HoraSalida','reservas.CC_Pasajero','reservas.Nom_Pasajero','reservas.Ape_Pasajero','reservas.Email_Pasajero','reservas.Tel_Pasajero','reservas.Cupos_reserva','reservas.Cupos_reserva')
        ->where([

                ['users.name','=',$nombre],
                ['reservas.Empresa','=',$nombre]

                ])
            ->get();
        return  view('empresas.reservas-empresa', compact('reservas'));
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
    public function destroy(Request $request,$id)
    {   
        $nombre=\Auth::user()->name;
        

        $cupos=\DB::table('destinos')
        ->select('cupos')
        ->where([
            ['Empresa','=',$nombre],
            ['Nombre','=',$request['destino']],
            ['FechaSalida','=',$request['fecha']],
            ['HoraSalida','=',$request['hora']],
        ])
        ->get();

        $cupos_T=$request['cupos'];

        foreach ($cupos as $q ) {
        $num=$q->cupos;
        $num1=$num+$cupos_T;
        
    }

        $cupos1=\DB::table('destinos')
            ->where([
            ['Empresa','=',$nombre],
            ['Nombre','=',$request['destino']],
            ['FechaSalida','=',$request['fecha']],
            ['HoraSalida','=',$request['hora']],
        ])
            ->update(['Cupos' => $num1]);

            \App\Reservas::destroy($id);
        
        return  Redirect::to('/reservas')->with('message','eliminar');
    }
}
