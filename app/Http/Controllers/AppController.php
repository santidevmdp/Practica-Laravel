<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;

class AppController extends Controller
{
    //private $path = "services";
    //$this->$path. 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() 
    {
        $facturas=Factura::orderBy('id', 'DESC')->paginate(10);
        
        //$attributes = array_keys((array)$facturas);
        return view('services.index', compact('facturas'));
        
    }
    public function create() 
    {
        /*$facturas=Factura::find();*/
        
        return view('services.factura', compact('facturas'));
        
    }
    public function store(Request $request) 
    {
        $factura = new Factura;
        $factura->nUsuario = $request->input('nUsuario');
        

        
        //return view('services.factura', compact('facturas'));*/
        
    }
    public function show($id) 
    {
        $mostrar=Factura::find($id);
        
        return view('services.vista', compact('mostrar'));
        
    }
    public function edit($id) 
    {
        /*$facturas=Factura::find($id);
        
        return view('services.vista', compact('facturas'));*/
        
    }
    
    public function update(Request $request, $id) 
    {
        /*$facturas=Factura::find();
        
        return view('services.factura', compact('facturas'));*/
        
    }

    //Metodo de eliminacion con jquery ajax
    public function destroy(Request $request, $id) 
    {
        if($request->ajax()){
            $facturas = Factura::find($id);
            $facturas->delete();
            $facturas_total = Factura::all()->count();

            return response()->json([
                'total' => $facturas_total,
                'message' => $facturas->entidad. 'fue eliminado'
            ]);
        }
    }

}
