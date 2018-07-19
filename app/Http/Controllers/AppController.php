<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;

class AppController extends Controller
{
   public function index() 
   {
        $facturas=Factura::all();
        //$facturas->first();
        //$attributes = array_keys((array)$facturas);
        return view('services.index', compact('facturas'));
        
   }
}
