@extends('layouts.app')

    @section('content')

        <h1 class="text-center">Listado de Registros</h1>
            
            @component('layouts.components.filter')
            
            @endcomponent
            @component('layouts.components.table')

            @endcomponent
            
    @endsection
    @section('helper')

        @component('layouts.components.helper')
            @slot('title')
                Encuentre de manera facil si pago o no una factura
            @endslot
        @endcomponent

    @endsection