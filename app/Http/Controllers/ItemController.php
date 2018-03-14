<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class ItemController extends Controller
{
    public function imprimir(){
        $pdf = \PDF::loadView('ejemplo');
           return $pdf->download('ejemplo.pdf');
   }
}
