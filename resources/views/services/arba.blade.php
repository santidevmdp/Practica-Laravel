@extends('layouts.app')

    @section('content')

        <div class="row container bg-white border rounded mx-auto mt-3">
            <div class="col-12 col-md-6 pt-2">
                <div class="row">
                    @universal()
                        @slot('mobile')
                            6
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        @slot('margin')
                            mt-3
                        @endslot
                        @slot('size')
                            display-5
                        @endslot
                        Impuesto
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="row justify-content-end">
                    @logo()
                        @slot('mobile')
                            12
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        @slot('margin')
                            mt-3
                        @endslot
                        @slot('color')
                            text-success
                        @endslot
                        @slot('size')
                            display-4
                        @endslot
                        ARBA
                        {{--@slot('img')
                            arba
                        @endslot
                        @slot('ext')
                            png
                        @endslot--}}
                    @endlogo
                </div>
            </div>
             <div class="col-12 col-md-12">
                <div class="py-3 bg-success"></div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="row  border border-success rounded">
                    @universal()
                        @slot('mobile')
                           5
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        Partida n°
                    @enduniversal
                    @universal()
                        @slot('mobile')
                            7
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        045-049369-4
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 my-2">
                <div class="row">
                    @universal()
                        @slot('mobile')
                            12
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        Vencimiento
                        @universal()
                            @slot('mobile')
                                6
                            @endslot
                            @slot('tablet')
                                6
                            @endslot
                            12/06/2018
                        @enduniversal
                    @enduniversal
                    @universal()
                        @slot('mobile')
                            12
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        Cuota
                        @universal()
                            @slot('mobile')
                                6
                            @endslot
                            @slot('tablet')
                                6
                            @endslot
                            3 de 5
                        @enduniversal
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="row">
                    @universal()
                        @slot('mobile')
                           12
                        @endslot
                        @slot('tablet')
                            12
                        @endslot
                        @slot('position')
                           text-center
                        @endslot
                        @slot('margin')
                            mr-5
                        @endslot
                            A PAGAR
                    @enduniversal
                    @universal()
                        @slot('mobile')
                            6
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        Cuota: 675.9
                    @enduniversal
                    @universal()
                        @slot('mobile')
                            6
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        Anual: 1946.9
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2 text-right">
                <div class="row">
                    @universal()
                        @slot('mobile')
                            12
                        @endslot
                        @slot('tablet')
                            12
                        @endslot
                        @slot('size')
                            display-5
                        @endslot
                        @slot('margin')
                            text-center
                        @endslot
                        Estado
                        @universal()
                            @slot('mobile')
                            12
                            @endslot
                            @slot('tablet')
                            12
                            @endslot
                            @slot('margin')
                            mt-2
                            @endslot
                            @slot('size')
                            display-5
                            @endslot
                            @slot('color')
                            text-warning
                            @endslot
                            EN CURSO
                        @enduniversal
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="py-3 bg-success"></div>
            </div>
            <div class="col-12 col-md-12">
                <h5 class="pt-3">Observaciones</h5>
                <p>Hasta ahora la app viene joya, calculo que el finde semana empiezo con jquery :D</p>
            </div>
            
        </div>

    @endsection