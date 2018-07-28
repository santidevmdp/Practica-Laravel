<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');

        //COMPONENTES
        Blade::component('layouts.components.alert', 'alert');
        Blade::component('layouts.components.table', 'table');
        Blade::component('layouts.components.filter', 'filter');
        Blade::component('layouts.components.universal', 'universal');
        Blade::component('layouts.components.logo', 'logo');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

}
