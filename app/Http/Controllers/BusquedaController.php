<?php

namespace App\Http\Controllers;

use App\Destinos;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buscar.buscar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $query = Destinos::join('users', 'destinos.Empresa', '=', 'users.name')
            ->select('destinos.Nombre', 'destinos.Empresa', 'destinos.FechaSalida', 'destinos.HoraSalida', 'destinos.Cupos', 'destinos.Valor', 'users.email', 'users.tel')
            ->where([
                ['destinos.FechaSalida', '=', $request['fecha-salida']],
                ['destinos.Nombre', '=', $request['nombre']],
                ['destinos.Cupos', '>', 0]

            ])
            ->get();
        return view('buscar.buscar', compact('query'));
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
