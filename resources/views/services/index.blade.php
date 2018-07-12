@extends('services.templates.master')

@section('content')

    <h2 class="p-3 text-center">Impuestos y Servicios</h2>

    <div class="row">
        <div class="col-sm-12">
            <form class="form-inline float-right">
                <div class="form-group">
                    <label for="filterSearch" class="mr-3 sr-only">Buscador</label>
                    <input type="text" class="form-control mr-3" id="filterSearch" aria-describedby="filtra-res" placeholder="Buscando...">
                    
                </div>
                <button type="button" class="btn btn-primary float-right">Buscar</button>
            </form>
            
        </div>
        <div id="filterTags" class="ml-3">
            <span class="badge badge-pill badge-primary">Impuesto
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </span>
            <span class="badge badge-pill badge-secondary">ARBA
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </span>
            <span class="badge badge-pill badge-success">2018
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </span>
            <span class="badge badge-pill badge-success">05
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </span>
        </div>
        
    </div>
    <div class="row mt-5">
        <div class="col-sm-12">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Institucion</th>
                    <th scope="col">Fecha Emision</th>
                    <th scope="col">Fecha Vencimiento</th>
                    <th scope="col">Total a Pagar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">254-70472 4</th>
                    <td>Impuesto</td>
                    <td>ARBA</td>
                    <td>10/05/2018</td>
                    <td>10/06/2018</td>
                    <td>667</td>
                    </tr>
                    <tr>
                    <th scope="row">2547-748772 4</th>
                    <td>Impuesto</td>
                    <td>ABL</td>
                    <td>10/07/2018</td>
                    <td>10/08/2018</td>
                    <td>350</td>
                    </tr>
                    <tr>
                    <th scope="row">20-772 7</th>
                    <td>Servicio</td>
                    <td>Gas</td>
                    <td>15/02/2018</td>
                    <td>15/03/2018</td>
                    <td>120</td>
                    </tr>
                    <tr>
                    <th scope="row">254-70472 4</th>
                    <td>Impuesto</td>
                    <td>ARBA</td>
                    <td>10/05/2018</td>
                    <td>10/06/2018</td>
                    <td>667</td>
                    </tr>
                    <tr>
                    <th scope="row">2547-748772 4</th>
                    <td>Impuesto</td>
                    <td>ABL</td>
                    <td>10/07/2018</td>
                    <td>10/08/2018</td>
                    <td>350</td>
                    </tr>
                    <tr>
                    <th scope="row">20-772 7</th>
                    <td>Servicio</td>
                    <td>Gas</td>
                    <td>15/02/2018</td>
                    <td>15/03/2018</td>
                    <td>120</td>
                    </tr>
                    <tr>
                    <th scope="row">254-70472 4</th>
                    <td>Impuesto</td>
                    <td>ARBA</td>
                    <td>10/05/2018</td>
                    <td>10/06/2018</td>
                    <td>667</td>
                    </tr>
                    <tr>
                    <th scope="row">2547-748772 4</th>
                    <td>Impuesto</td>
                    <td>ABL</td>
                    <td>10/07/2018</td>
                    <td>10/08/2018</td>
                    <td>350</td>
                    </tr>
                    <tr>
                    <th scope="row">20-772 7</th>
                    <td>Servicio</td>
                    <td>Gas</td>
                    <td>15/02/2018</td>
                    <td>15/03/2018</td>
                    <td>120</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection


@section('helper')
    <div class="row mt-5 pt-5">
        <div class="col-sm-12">
            <div class="alert alert-primary" role="alert">
                Encuentre de manera facil si pago o no una factura
            </div>
        </div>
    </div>

@endsection