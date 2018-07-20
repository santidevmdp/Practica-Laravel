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
                        Servicio
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="row justify-content-end">
                    @universal()
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
                            text-primary
                        @endslot
                        @slot('size')
                            display-4
                        @endslot
                        EDEA
                        {{--@slot('image')
                            arba
                        @endslot
                        @slot('ext')
                            png
                        @endslot--}}
                    @enduniversal
                </div>
            </div>
             <div class="col-12 col-md-12">
                <div class="py-3 bg-primary"></div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="row  border border-primary rounded">
                    @universal()
                        @slot('mobile')
                           5
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        N° Cuenta
                    @enduniversal
                    @universal()
                        @slot('mobile')
                            7
                        @endslot
                        @slot('tablet')
                            6
                        @endslot
                        075-0098504
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
                            12/03/2018
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
                        Total: 1238.05
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
                            text-success
                            @endslot
                            PAGADO
                        @enduniversal
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="py-3 bg-primary"></div>
            </div>
            <div class="col-12 col-md-12">
                <h5 class="pt-3">Observaciones</h5>
                <p>La vista de edea y las demás tienen un largo camino por recorrer</p>
            </div>
        </div>

    @endsection