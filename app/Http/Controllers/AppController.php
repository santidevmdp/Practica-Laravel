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
        $facturas=Factura::orderBy('id', 'DESC')
                ->where('user_id', auth()->user()->id)
                ->paginate(10);
        
        //$attributes = array_keys((array)$facturas);
        return view('services.index', compact('facturas'));
        
    }
    public function create() 
    {
        /*$alcances=Factura::orderBy('alcances', 'ASC')->pluck('alcances', 'id');
        $estados=Factura::orderBy('estados', 'ASC')->pluck('estados', 'id');
        $periodos=Factura::orderBy('periodos', 'ASC')->pluck('periodos', 'id');*/

        $registros = ['Impuesto', 'Servicio']; 
        $alcances = [ 'Municipal', 'Provincial', 'Nacional' ];
        $instituciones = [ 'ARBA', 'EDEA', 'BCOSAENZ', 'ABL', 'NARANJA' ];
        $periodos = [ 'Mensual', 'Bimestral', 'Trimestral', 'Cuatrimestral', 'Semestral', 'Anual' ];
        $estados = [ 'PAGADO', 'EN CURSO', 'NO PAGO' ];

        return view('services.factura', compact('registros', 'alcances', 'instituciones', 'periodos', 'estados'));
        
    }
    public function store(Request $request) 
    {
        $factura = Factura::create($request->all());
        
        return redirect()->route('app::editar', $factura->id)
                        ->with('info', 'Factura creada con exito');
        
    }
    public function show($id) 
    {
        $mostrar=Factura::find($id);
        
        return view('services.vista', compact('mostrar'));
        
    }
    public function edit($id) 
    {
        $facturas=Factura::find($id);
        //$facturas=Factura::orderBy('id', 'ASC');
        
        return view('services.editar', compact('facturas'));
        
    }
    
    public function update(Request $request, $id) 
    {
        $facturas=Factura::find($id);
        $factura->fill($request->all())->save();

        return redirect()->route('app::editar', $factura->id)
                        ->with('info', 'Factura actualizada con exito');
        
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
