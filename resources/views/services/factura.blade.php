@extends('layouts.app')

    @section('content')

        <div class="row bg-white border rounded mx-auto mt-3">
            <div class="container">
                {!! Form::open(['route' => 'app::guardar', 'class' => 'col-12 col-md-12 pt-2', 'id' => 'regForm']) !!}
                    <h2 class="text-center">Registro de pagos</h2>
                    
                    <div class="tabForm pt-2">
                        {{ Form::hidden('user_id', auth()->user()->id) }}
                            <div class="row">
                                <div class="col-12 col-md-4 pt-2">
                                    <div class="form-group">
                                        {{ Form::label('tipoRegistro', 'Tipo de registro') }}
                                        {{ Form::select('tipoRegistro', $registros, null, ['class' => 'form-control', 'id' => 'tipoRegistro']) }}
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pt-2">
                                    <div class="form-group">
                                        {{ Form::label('tipoAlcance', 'Alcance') }}
                                        {{ Form::select('tipoAlcance', $alcances, null, ['class' => 'form-control', 'id' => 'tipoAlcance']) }}
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 pt-2">
                                    <div class="form-group">
                                        {{ Form::label('tipoInstitucion', 'Nombre de empresa o institucion') }}
                                        {{ Form::select('tipoInstitucion', $instituciones, null, ['class' => 'form-control', 'id' => 'tipoInstitucion']) }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 pt-2  border border-success rounded">
                                <div class="form-group">
                                    {{ Form::label('nUsuario', 'N° Partida o Usuario') }}
                                    {{ Form::text('nUsuario', null, ['class' => 'form-control', 'id' => 'nUsuario', 'placeholder' => 'ej: 045-049369-4']) }}
                                </div>   
                            </div>
                        
                    </div>
                    
                    <!--<div class="mt-3 py-3 bg-success"></div>-->
                    
                    <!--AGREGAR factura de entrada opcional ingreso manual, automatico ingreso fecha actual -->
                    <!--AGREGAR cuotas al elegir pagos mensuales, bimestrales o por numero -->
                    
                    <div class="tabForm mt-2">Datos factura
                        <div class="row">
                            <div class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    {{ Form::label('fSalida', 'Fecha de Vencimiento') }}
                                    <!--<label for="fSalida">Vencimiento</label>
                                    <input type="date" class="form-control" id="fSalida" name="fSalida">-->
                                    {{ Form::date('fSalida', \Carbon\Carbon::now()->format('d-m-Y')) }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    {{ Form::label('periodo', 'Periodo de pago') }}
                                    {{ Form::select('periodo', $periodos, null, ['class' => 'form-control', 'id' => 'periodo']) }}
                                </div>
                            </div>
                        
                            <div class="col-12 col-md-12 pt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group">
                                            {{ Form::label('periodo', 'Mensual') }}
                                            {{ Form::number('periodo', null, ['class' => 'form-control', 'id' => 'mensual']) }}
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group">
                                            {{ Form::label('periodo', 'Anual') }}
                                            {{ Form::number('periodo', null, ['class' => 'form-control', 'id' => 'anual']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 pt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 my-2 justify-content-end">
                                        <div class="form-group">
                                            {{ Form::label('estado', 'Estado') }}
                                            {{ Form::number('estado', null, ['class' => 'form-control', 'id' => 'estado']) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3 py-3 bg-success"></div>

                    <div class="tabForm">
                        <div class="col-12 col-md-12">
                            <div class="form-group mt-2">
                                {{ Form::label('observaciones', 'Observaciones') }}
                                {{ Form::textarea('observaciones', null, ['class' => 'form-control', 'id' => 'observaciones']) }}
                            </div>
                        </div>
                    </div>
                    <!--Controles formulario mobile y tablet-->
                    <div style="overflow:auto;">
                        <div class="text-right">
                            <button class="btn btn-outline-secondary mt-2" type="button" id="prevBtn" onclick="nextPrev(-1)">Atras</button>
                            <button class="btn btn-warning mt-2" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div class="mt-4 text-center">
                        <span class="step bg-success"></span>
                        <span class="step bg-success"></span>
                        <span class="step bg-success"></span>
                        <span class="step bg-success"></span>
                    </div>
                <!--</form>-->
                {!! Form::close() !!}
            </div>
        </div>

    @endsection