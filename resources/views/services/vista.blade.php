@extends('layouts.app')

    @section('content')

        <div class="row container bg-white border rounded mx-auto mt-3 justify-content-end">
            <!--<i class="fas fa-ellipsis-v"></i>-->
            <!--<span class="fa-stack fa-2x">
                <i class="fas fa-plus fa-stack-1x fa-clipboard"></i>
            </span>-->
            <!--<i class="far fa-list-alt fa-2x mr-1"></i>-->
            <i class="fas fa-edit fa-2x"></i>
            <i class="fas fa-trash-alt fa-2x text-danger"></i>
        </div>

        <div class="row container bg-white border rounded mx-auto mt-3">
            <div class="col-12 col-md-6 pt-2">
                <div class="row">
                    @universal([
                            'mobile' => '6', 
                            'tablet' => '6', 
                            'size' => 'display-5', 
                            'margin' => 'mt-3'
                        ])
                        
                        {{$mostrar->tipo}}
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="row justify-content-end">
                    @logo([
                            'mobile' => '12', 
                            'tablet' => '6', 
                            'size' => 'display-5', 
                            'margin' => 'mt-3',
                            'color' => 'text-primary',
                            
                        ])
                        
                        @slot('image')
                            {{$mostrar->entidad}}
                        @endslot
                        
                        @if ( $mostrar->entidad == 'EDEA' )
                            @slot('ext')
                                jpeg
                            @endslot
                        @endif
                    @endlogo
                </div>
            </div>
             <div class="col-12 col-md-12">
                <div class="py-3 bg-primary"></div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="row  border border-primary rounded">
                    @universal(['mobile' => '5', 'tablet' => '6'])
                        
                        N° Cuenta
                    @enduniversal
                    @universal(['mobile' => '7', 'tablet' => '6'])
                        
                        075-0098504
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 my-2">
                <div class="row">
                    @universal(['mobile' => '12', 'tablet' => '6'])
                        
                        Vencimiento
                        @universal(['mobile' => '8', 'tablet' => '12'])
                            
                            {{$mostrar->fSalida}}
                        @enduniversal
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2">
                <div class="row">
                    @universal([
                            'mobile' => '12', 
                            'tablet' => '6', 
                            'margin' => 'mr-5', 
                            'position' => 'text-center'
                        ])
                        
                            A PAGAR
                    @enduniversal
                    @universal(['mobile' => '6', 'tablet' => '6'])
                        
                        Total: {{$mostrar->deuda}}
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-6 pt-2 text-right">
                <div class="row">
                    @universal([
                            'mobile' => '12', 
                            'tablet' => '12', 
                            'size' => 'display-5', 
                            'margin' => 'text-center'
                        ])
                        
                        Estado
                        @universal([
                            'mobile' => '12', 
                            'tablet' => '12', 
                            'size' => 'display-5', 
                            'margin' => 'mt-2'
                        ])

                            @switch($mostrar->estados)
                                @case('SUCCESS')
                                    PAGADO
                                    @slot('color')
                                        text-success
                                    @endslot
                                    @break

                                @case('WARNING')
                                    EN CURSO
                                    @slot('color')
                                        text-warning
                                    @endslot
                                    @break

                                @case('DANGER')
                                    NO PAGO
                                    @slot('color')
                                        text-danger
                                    @endslot
                                    @break
                            @endswitch
                            
                            
                        @enduniversal
                    @enduniversal
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="py-3 bg-primary"></div>
            </div>
            <div class="col-12 col-md-12">
                <h5 class="pt-3">Observaciones</h5>
                <p>{{$mostrar->observaciones}}</p>
            </div>
        </div>

    @endsection