<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasLogController extends Controller
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
        
                $fecha=$request ['fecha'];
                $hora=$request ['hora'];
                $empresa=$request['empresa'];
                $destino=$request['destino'];
                $Cupos=$request['cupos'];
                $valor=$request['Valor'];
                $mail=$request['mail'];
                $tel1=$request['tel'];
                $res=\DB::table('users')
                ->select('name','apellido','cedula','email','password','tel')
                ->where([
                        ['email','=',\Auth::user()->email],
                        ['password','=',\Auth::user()->password],

                ])
                ->get();
                return view('usuarios.reservas-log', compact('res','fecha','hora','empresa','destino','Cupos','valor','mail','tel1')); 
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
