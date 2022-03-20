<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistorialEmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $total=\DB::table('reservas')
         ->select('Destino',\DB::raw('count(Destino) as total'))
         ->where('Email_Pasajero', '=', \Auth::user()->email)
         ->groupBy('Destino')
         ->get();

       return  view('usuarios.user-home', compact('total'));
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
        $mes=$request['mes'];
        

         $fecha=\DB::table('reservas')
         ->select(\DB::raw('month(FechaSalida) as mes'))
         ->where(\DB::raw('month(FechaSalida)'), '=', $mes)
         ->get();
         foreach ($fecha as $f) {
             $fecha1=$f->mes;
         }

         $histo=\DB::table('reservas')
         ->select('Destino',\DB::raw('count(Destino) as total'))
         ->where(\DB::raw('month(FechaSalida)'), '=', $mes)
         ->groupBy('Destino')
         ->get();

         $total=\DB::table('reservas')
         ->select(\DB::raw('count(Destino) as total'))
         ->where(\DB::raw('month(FechaSalida)'), '=', $mes)
         ->get();
         foreach ($total as $t) {
             $total1=$t->total;
         }
         
         return  view('empresas.result-historial', compact('histo','fecha','total1'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
