<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinosController extends Controller
{
    public function index(){

	 return view('index');

    }
    public function login(){

    	return view('login');
    }
    
    public function ComoReservar(){

        return view('comoReservar');
    }
    public function destinos(){

        return view('destinos');
    }
    public function work(){

        return view('work');
    }
    public function contactanos(){

        return view('contacto');
    }
    //blog inicio
    public function blog(){

        $posts = \App\Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3) ;
        return view('posts', compact('posts'));
        
    }

    public function post($slug){
        $post = \App\Post::where('slug', $slug)->first();
        return view('/post', compact('post'));
    }

    public function category($slug){
        $category = \App\Category::where('slug', $slug)->pluck('id')->first();

        $posts    = \App\Post::where('category_id', $category)
                   ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3) ;
                   return view('/post', compact('posts'));
    }

    //blog fin

    //vista formulario inscripcion empresas

    public function basic(){

        return view('auth.basic');

    }
    public function standard(){

        return view('auth.standard');

    }
    public function premium(){

        return view('auth.premium');

    }
   
    
}
