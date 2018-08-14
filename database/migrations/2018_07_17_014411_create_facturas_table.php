<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->enum('tipo', ['IMPUESTO', 'SERVICIO', 'OTROS'])->default('SERVICIO');
            
            $table->enum('alcance', ['NACIONAL', 'PROVINCIAL', 'MUNICIPAL'])->default('MUNICIPAL');
            
            $table->date('emision');
            $table->date('vencimiento');
            $table->text('observaciones')->nullable();
            
            $table->enum('periodo', ['MENSUAL', 'BIMESTRAL', 'TRIMESTRAL','CUATRIMESTRAL','SEMESTRAL', 'ANUAL'])->default('MENSUAL');
            $table->timestamps();

        });

        Schema::table('facturas', function (Blueprint $table) {
            
            //RELACIONES
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');;

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facturas');
    }
}
