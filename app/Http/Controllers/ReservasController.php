<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasController extends Controller
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
    if (empty($request['email']) and empty($Request['password'])) {
        

        $fecha=$request ['fecha'];
        $hora=$request ['hora'];
        $empresa=$request['empresa'];
        $destino=$request['destino']; 
        $Cupos=$request['cupos'];
        $valor=$request['Valor'];
        $mail=$request['mail'];
        $tel=$request['tel'];
        return view('reservas',compact('fecha','hora','empresa','destino','Cupos','valor','mail','tel'));
    }
     else
        if($contra=\Auth::attempt(['email' => $request ['email'], 'password' => $request ['password']])) {
            
        
                $fecha=$request ['fecha'];
                $hora=$request ['hora'];
                $empresa=$request['empresa'];
                $destino=$request['destino'];
                $Cupos=$request['cupos'];
                $valor=$request['Valor'];
                $mail=$request['mail'];
                $tel1=$request['tel'];
                $res=\DB::table('users')->select('name','apellido','cedula','email','password','tel')
                ->where([
                        ['email','=',\Auth::user()->email],
                        ['password','=',\Auth::user()->password],

                ])
                ->get();
                return view('reservas-log', compact('res','fecha','hora','empresa','destino','Cupos','valor','mail','tel1')); 
    
    }
    else{
        echo '<div class="alert alert-danger" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Usuario ó Contraseñea Incorrectos Vuelve a Buscar tu Destino</div>';
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
