<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregaIconFacturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facturas', function(Blueprint $table){
            $table->enum('icon', ['CHECK', 'EXCLAMATION-TRIANGLE', 'TIMES'])->default('TIMES')->after('balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facturas', function(Blueprint $table){
            $table->dropColumn('icon');
        });
    }
}
