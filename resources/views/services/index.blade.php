@extends('layouts.app')

    @section('content')

        <h1 class="text-center">Listado de Registros</h1>
            
            @component('layouts.components.filter')
            
            @endcomponent
            <div class="tabled pt-3 text-center">
                @component('layouts.components.table')
                
                <div class="display-5">
                    
                    {{-- dd($facturas) --}}
                        @foreach ( $facturas as $factura)
                        
                           <li>{{ dd($factura) }}</li>
                        
                        @endforeach
                   
                    

                
                </div>
                    {{--@if ( $longitud>= 0)--}}
                        
                        {{--@foreach (range(0, $facturas) as $factura )--}}
                            
                            {{--@slot('dato')
                                Tipo
                            @endslot--}}
                        {{--@endforeach--}}
                   {{-- @endif--}}
                @endcomponent
            </div>
    @endsection
    @section('helper')

        @component('layouts.components.helper')
            @slot('title')
                Encuentre de manera facil si pago o no una factura
            @endslot
        @endcomponent

    @endsection