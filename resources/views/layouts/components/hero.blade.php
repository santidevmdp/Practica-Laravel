<div class="bg-{{ $type or 'dark'}} mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
    <div class="my-3 py-3">
        <h2 class="display-5">{{ $title }}</h2>
        <p class="lead">{{ $slot }}</p>
    </div>
    {{ $mobile }}
</div>