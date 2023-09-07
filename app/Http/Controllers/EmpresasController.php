<?php

namespace App\Http\Controllers;

use Redirect;
use Session;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombre = \Auth::user()->name;
        $destinos = \DB::table('destinos')->select('id', 'Nombre', 'FechaSalida', 'HoraSalida', 'Cupos', 'Valor')
            ->where('Empresa', '=', $nombre)
            ->get();

        return  view('empresas.destinos-empresa', compact('destinos', 'nombre'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.nueva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $destinos = \DB::table('destinos')->select('Nombre', 'FechaSalida', 'Empresa', 'Cupos')
            ->where([
                ['Empresa', '=', $request['empresa']],
                ['Nombre', '=', $request['nombre']],
                ['FechaSalida', '=', $request['fecha']],

            ])
            ->get();


        $num1 = 0;
        foreach ($destinos as $q) {

            $num = $q->Cupos;
            $num1 += $num;
        }
        $num2 = $request['cupos'];

        $reservados = \DB::table('reservas')->select('Cupos_reserva')
            ->where([
                ['Empresa', '=', $request['empresa']],
                ['Destino', '=', $request['nombre']],
                ['FechaSalida', '=', $request['fecha']],

            ])
            ->get();
        $num3 = 0;
        foreach ($reservados as $a) {

            $cup = $a->Cupos_reserva;
            $num3 += $cup;
        }

        $num4 = ($num1 + $num2);
        $num5 = $num4 + $num3;



        if ($num5 > \Auth::user()->cupos) {


            return  Redirect::to('/destinos-empresas')->with('message', 'creado');
        } else {
            \App\Destinos::create([
                'Nombre' => $request['nombre'],
                'Empresa' => $request['empresa'],
                'FechaSalida' => $request['fecha'],
                'HoraSalida' => $request['hora'],
                'Cupos' => $request['cupos'],
                'Valor' => $request['valor'],
            ]);

            return  Redirect::to('/destinos-empresas')->with('message', 'hecho');
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
        $user = \App\User::find($id);
        return view('empresas.edit', ['user' => $user]);
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
        $user = \App\User::find($id);
        $nombre = $request['name'];
        $email = $request['email'];
        $telefono = $request['tel'];
        $nit = $request['cedula'];


        $user->fill(['name' => $nombre]);
        $user->fill(['email' => $email]);
        $user->fill(['cedula' => $nit]);
        $user->fill(['tel' => $telefono]);
        $user->save();


        return  Redirect::to('/home')->with('message', 'creado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Destinos::destroy($id);

        return  Redirect::to('/destinos-empresas')->with('message', 'eliminar');
    }
}
