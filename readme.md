<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


<h3>Practicas con Laravel 5.6</h3>


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

//En l modelo entidad van nombres tales como ABL, EDEA, ARBA, etc
            $table->unsignedInteger('entity_id');
        $table->foreign('entity_id')->references('id')->on('entities')
                ->onUpdate('cascade')
                ->onDelete('cascade');

//Organizo los numeros de usuarios y partidas aparte
            $table->unsignedInteger('partner_id');
        $table->foreign('partner_id')->references('id')->on('partners')
                ->onUpdate('cascade')
                ->onDelete('cascade');

//Una tabla aparte para los datos de deuda
            $table->unsignedInteger('balance_id');            
        $table->foreign('balance_id')->references('id')->on('balances')
                ->onUpdate('cascade')
                ->onDelete('cascade');
