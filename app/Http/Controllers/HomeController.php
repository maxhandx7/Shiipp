<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $type=\Auth::user()->type;
        if ($type=='empresa') {
             return view('home');
        }
        else{
             return view('pasenger');
        }
       
    }
    public function TusDestinos(){

        return view('tus-destinos');   
    }
     public function pasenger(){

        return view('pasenger');
    }
    public function userHome(){

        return view('usuarios.viajes');
    }
    
}
