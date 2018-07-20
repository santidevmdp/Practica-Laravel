@extends('layouts.app')

    @section('content')

        <h1 class="text-center">Listado de Registros</h1>
            {{--FILTRO DE TABLA CON TAG--}}
            <div class="row py-3  container bg-white border rounded mx-auto">
                @filter
                @endfilter
            </div>
            {{--TABLA CON DATOS DE FACTURACIONES--}}
            <div class="tabled py-3 mt-3 text-center container bg-white border rounded mx-auto">
                <div class="thead bg-light">
                    <div class="tr d-flex flex-row py-2">
                        <div class="col th">Tipo</div>
                        <div class="col th">Institucion</div>
                        <div class="col th">Fecha Emision</div>
                        <div class="col th">Fecha Venc.</div>
                        <div class="col th">Total a pagar</div>
                        <div class="col th">Estado</div>
                    </div>
                </div>
                <div class="tbody" style="cursor:pointer">
                    @if(count($facturas))
                        @foreach ( $facturas as $factura)
                            @table()
                                @slot('id')
                                    {{$factura->id}}
                                @endslot
                                @slot('tipo')
                                    {{$factura->tipo}}
                                @endslot
                                @slot('entidad')
                                    {{$factura->entidad}}
                                @endslot
                                @slot('fIngreso')
                                    {{$factura->fIngreso}}
                                @endslot
                                @slot('fSalida')
                                    {{$factura->fSalida}}
                                @endslot
                                @slot('deuda')
                                    {{$factura->deuda}}
                                @endslot
                                @slot('icon')
                                    {{$factura->icon}}
                                @endslot
                                @slot('estados')
                                    {{$factura->estados}}
                                @endslot
                            @endtable
                        @endforeach
                    @endif
                </div>
            </div>
            
    @endsection
    @section('helper')
        {{--HELPER CON NOTIFICACIONES UTILES 'EN DESARROLLO'--}}
        @alert()
            @slot('title')
                Encuentre de manera facil si pago o no una factura
            @endslot
        @endalert

    @endsection