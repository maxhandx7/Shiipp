<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//rutas de controladores 

//cuando hay muchas rutas se utiliza un controlador de recursos

//controladores paginas principales



Route::get('inicio/', 'DestinosController@index');
Route::get('login/', 'DestinosController@login');
Route::get('como-reservar/', 'DestinosController@ComoReservar');
Route::get('destinos/', 'DestinosController@destinos');
Route::get('trabaja-con-nosotros/', 'DestinosController@work');
Route::get('contactanos/', 'DestinosController@contactanos');

//controlador inicio de seccion
Route::get('/register', 'HomeController@index')->name('register');
Route::get('/pasenger', 'HomeController@pasenger')->name('pasenger');
Route::get('/user-home', 'HomeController@userHome');


//controladores empresa
Route::resource('destinos-empresas', 'EmpresasController');
Route::resource('reservas','ReservaEmpresaController');
Route::resource('historial', 'HistorialEmpresasController');
Route::resource('Configuracion', 'EmpresasController');


//controladores usuarios registrados
Route::resource('mis-reservas','MisReservasController');
Route::resource('/BusquedaLog','BusquedaLogController');
Route::resource('ReservarLog','ReservasLogController');

//controladores usuarios

Route::resource('/Busqueda','BusquedaController');
Route::resource('Reservar','ReservasController');
Route::resource('Nueva-reserva','NuevaReservaController');

//controladores de correos
Route::resource('Enviar','MailController');
Route::resource('booking','ReservasMailController');


//blog
Route::get('blog/', 'DestinosController@blog')->name('Blog');
Route::get('post/{slug}', 'DestinosController@post')->name('post');

Route::get('category/{slug}','DestinosController@category')->name('category');
Route::get('Etiquetas/{slug}','DestinosController@tag')->name('tag');


//Controladores de planes
Route::get('basic','DestinosController@basic');
Route::get('standard','DestinosController@standard');
Route::get('premium','DestinosController@premium');







Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
