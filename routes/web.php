<?php

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
Route::get('/formularios', function(){
	return view ('form');
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

Route::get ('libros', 'BookController@prueba')->name('libros');
