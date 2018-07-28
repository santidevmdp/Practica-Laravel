@extends('layouts.app')

    @section('content')

        <div class="row bg-white border rounded mx-auto mt-3">
            <div class="container">
                <form id="regForm" action="" class="col-12 col-md-12 pt-2">
                    <h2 class="text-center">Registro de pagos</h2>
                    
                    <div class="tabForm pt-2">
                        
                            <div class="row">
                                <div class="col-12 col-md-6 pt-2">
                                    <div class="form-group">
                                        <label for="tipoRegistro">Tipo de registro</label>
                                        <select class="form-control" id="tipoRegistro" name="tipoRegistro">
                                        <option value="1">Impuesto</option>
                                        <option value="2">Servicio</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 pt-2">
                                    <div class="form-group">
                                        <label for="tipoInstitucion">Nombre de empresa o institucion</label>
                                        <select class="form-control" id="tipoInstitucion" name="tipoInstitucion">
                                        <option value="1">ARBA</option>
                                        <option value="2">EDEA</option>
                                        <option value="3">Bco Saenz</option>
                                        <option value="4">ABL</option>
                                        <option value="5">Naranja</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 pt-2  border border-success rounded">
                                <div class="form-group">
                                    <label for="nUsuario">N° Partida o Usuario</label>
                                    <input type="text" class="form-control" id="nUsuario" name="nUsuario" placeholder="045-049369-4">
                                </div>   
                            </div>
                        
                    </div>
                    
                    <div class="mt-3 py-3 bg-success"></div>
                    
                    <!--AGREGAR factura de entrada opcional ingreso manual, automatico ingreso fecha actual -->
                    <!--AGREGAR cuotas al elegir pagos mensuales, bimestrales o por numero -->
                    
                    <div class="tabForm mt-2">Datos factura
                        <div class="row">
                            <div class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="fSalida">Vencimiento</label>
                                    <input type="date" class="form-control" id="fSalida" name="fSalida">
                                </div>
                            </div>
                            <div class="col-12 col-md-6 my-2">
                                <div class="form-group">
                                    <label for="tipoInstitucion">Periodo de pago</label>
                                    <select class="form-control" id="tipoInstitucion" name="tipoInstitucion">
                                        <option value="1" selected>Mensual</option>
                                        <option value="2">Bimestral</option>
                                        <option value="3">Trimestral</option>
                                        <option value="4">Cuatrimestral</option>
                                        <option value="5">Semestral</option>
                                        <option value="6">Anual</option>
                                        <option value="7">Otro</option>
                                    </select>
                                </div>
                            </div>
                        
                            <div class="col-12 col-md-12 pt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group">
                                            <label for="mensual">Mensual</label>
                                            <input type="number" class="form-control" id="mensual" name="mensual">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 my-2">
                                        <div class="form-group">
                                            <label for="anual">Anual</label>
                                            <input type="number" class="form-control" id="anual" name="anual">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 pt-2">
                                <div class="row">
                                    <div class="col-12 col-md-6 my-2 justify-content-end">
                                        <div class="form-group">
                                            <label for="estado">Estado</label>
                                            <select class="form-control" id="estado" name="estado">
                                            <option value="1">PAGADO</option>
                                            <option value="2" selected>EN CURSO</option>
                                            <option value="3">NO PAGO</option>
                                            </select>
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
                                <label for="observaciones">Observaciones</label>
                                <textarea class="form-control" id="observaciones" name="observaciones" rows="3" placeholder="Hasta ahora la app viene joya, calculo que el finde semana empiezo con jquery :D"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--Controles formulario mobile y tablet-->
                    <div style="overflow:auto;">
                        <div class="text-right">
                            <button class="btn btn-outline-secondary" type="button" id="prevBtn" onclick="nextPrev(-1)">Atras</button>
                            <button class="btn btn-warning" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div class="mt-4 text-center">
                        <span class="step bg-success"></span>
                        <span class="step bg-success"></span>
                        <span class="step bg-success"></span>
                        <span class="step bg-success"></span>
                    </div>
                </form>
            </div>
        </div>

    @endsection