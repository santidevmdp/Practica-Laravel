@extends('layouts.app')

    @section('content')

        <h1 class="text-center">Listado de Registros</h1>
            {{--FILTRO DE TABLA CON TAG--}}
            @component('layouts.components.filter')
            @endcomponent

            {{--TABLA CON DATOS DE FACTURACIONES--}}
            <div class="tabled pt-3 text-center">
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
                    @if(count($facturas) > 0)
                        @foreach ( $facturas as $factura)
                            @component('layouts.components.table')
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
                                @slot('estados')
                                    {{$factura->estados}}
                                @endslot
                            @endcomponent
                        @endforeach
                    @endif
                </div>
            </div>
            
    @endsection
    @section('helper')
        {{--HELPER CON NOTIFICACIONES UTILES 'EN DESARROLLO'--}}
        @component('layouts.components.helper')
            @slot('title')
                Encuentre de manera facil si pago o no una factura
            @endslot
        @endcomponent

    @endsection