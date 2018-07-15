@extends('layouts.web')


@section('showcase')

    <div class="position-relative overflow-hidden p-md-5 m-md-5 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">CuentasClaras.com</h1>
        <p class="lead font-weight-normal">Registre de manera facil sus facturas, impuestos, servicios y acceda a ellos cuando lo necesite</p>
        <a class="btn btn-outline-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
      </div>
      <div class="product-device box-shadow d-none d-md-block"></div>
      <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

@endsection


@section('content')

  <div class="d-md-flex flex-md-equal w-100 pl-md-3">
      @component('layouts.components.hero-grid', ['color' => 'white', 'type' => 'dark'])
        @slot('image')
          mobile
        @endslot
        @slot('title')
          Another headline
        @endslot
        
        @slot('list')
          <div class="display-4">hola</div>
          <div class="display-4">que</div>
          <div class="display-4">hace</div>
        @endslot
        
      @endcomponent
  </div>

  <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      @component('layouts.components.hero-grid', ['position' => 'reverse', 'type' => 'primary'])
      
        @slot('title')
          Another headline
        @endslot
          And an even wittier subheading.

      @endcomponent

  </div>
@endsection
