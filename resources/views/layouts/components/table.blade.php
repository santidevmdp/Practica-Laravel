
        <div class="tr d-flex flex-row py-2" data-id="{{$id}}">
            <div class="col-2 th">{{$tipo}}</div>
            <div class="col-3 td">{{$entidad}}</div>
            <div class="col-2 td">{{$fIngreso}}</div>
            <div class="col-2 td">{{$fSalida}}</div>
            <div class="col-2 td">{{$deuda}}</div>
            <div class="col-1 td"><i class="fas fa-{{ strtolower($icon) }} text-{{strtolower($estados)}}"></i></div>
        </div>
    
        