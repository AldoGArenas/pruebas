<?php
use JasperPHP\JasperPHP as JasperPHP;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hola', function(){
	return "Hola mundo";
});

Route::get('/hola2', function(){
	return view ('hola');
});
Route::get('/form',function(){
	return view('form');
 });

Route::get('/adios', function(){
	return view ('nueva.adios');
});
Route::get('hola/{name}', function($name){
	return '_Hola_'.$name;
});

Route::get('/adios/{name}', function($name){
	return view ('nueva.adios')->with('name',$name);
});
Route::get('/compilar', function () {
	
	$jasper = new JasperPHP;

	$jasper->compile(base_path().'/vendor/cossou/jasperphp/examples/hello_world.jrxml')->execute();
	return view('welcome');
});
Route::name('print')->get('/imprimir', 'ItemController@imprimir');
Route::get ('contact', 'ContactController@create')-> name ('contact.create');
Route::post ('contact', 'ContactContrller@store')->name('contact.store');

Route::get ('libros', 'BookController@prueba')->name('libros');
