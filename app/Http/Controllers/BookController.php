<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function prueba(){
    	$libros= Book::where('nombre','La chica del tren')->get();
    	//dd($libros);
    	return view ('Book.index')->with("libros",$libros);
	}
}
