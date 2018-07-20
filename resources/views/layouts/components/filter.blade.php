                <div class="col-12 col-sm-12">

                    {{--Filtrado de resultados de la tabla--}}
                    <form class="form-inline float-right">
                        <div class="form-group">
                            <label for="filterSearch" class="mr-3 sr-only"></label>
                            <input type="text" class="form-control mr-3" id="filterSearch" aria-describedby="filtra-res" placeholder="Buscando...">        
                        </div>
                        <button type="button" class="btn btn-outline-primary float-right">Buscar</button>
                        <button type="button" class="btn btn-outline-secondary float-right"><i class="fas fa-filter"></i></button>
                    </form>

                    {{--Tags de resultados de la tabla--}}
                    <div id="filterTags" class="ml-3 pt-2">
                        @component('layouts.components.badge')
                        {{--Filter hace referencia al elemento filtrado o busqueda--}}
                            @slot('filter')
                                Impuesto
                            @endslot
                        @endcomponent
                        @component('layouts.components.badge', ['color' => 'secondary'])
                            @slot('filter')
                                Servicio
                            @endslot
                        @endcomponent
                        @component('layouts.components.badge', ['color' => 'success'])
                            @slot('filter')
                                05
                            @endslot
                        @endcomponent
                    </div>
                </div>
          