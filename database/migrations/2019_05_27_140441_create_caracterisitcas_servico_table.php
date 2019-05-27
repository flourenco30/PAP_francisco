<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracterisitcasServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carac_servi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('carac_id')->unsigned();
            $table->bigInteger('servi_id')->unsigned();
            $table->timestamps();

            $table->foreign('carac_id')->references('id')->on('caracteristicas');
            $table->foreign('servi_id')->references('id')->on('servicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carac_servi');
    }
}
