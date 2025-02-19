<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destination;
use App\Destinos;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type=Auth::user()->type;
        if ($type=='empresa') {
             return view('home');
        }
        else{
           return  redirect('pasenger');
        }
       
    }
    public function TusDestinos(){

        return view('tus-destinos');   
    }
     public function pasenger(){
        $destinos = Destinos::all();
        $destinations = Destination::all();
        $fechasResaltadasPorNombre = [];
        foreach ($destinos as $destino) {
            $fechasResaltadasPorNombre[$destino->Nombre][] = $destino->FechaSalida;
        }
             return view('pasenger', compact('fechasResaltadasPorNombre', 'destinations'));
    }
    public function userHome(){

        return view('usuarios.viajes');
    }
    
}
