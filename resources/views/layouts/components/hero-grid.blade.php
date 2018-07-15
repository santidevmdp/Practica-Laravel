<div class="bg-{{ $type or 'dark'}} mr-md-1 py-3 px-3 pt-md-5 px-md-5 text-{{ $position or 'center' }} text-{{ $color or 'black' }} row flex-row-{{ $position or '' }}">
    <div class="col-sm-6">
        <figure class="figure">
            <img src="images/{{ $image or 'all'}}.png" class="figure-img img-fluid rounded" alt="Home de la app">
        </figure>
    </div>
    <div class="col-sm-6">
        <h2 class="display-4">{{ $title }}</h2>
        <div class="row flex-column pt-5">
            {{ $list or '' }}
        </div>
    </div>
</div>