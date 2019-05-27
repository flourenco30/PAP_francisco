<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracterisitcasServicoCustomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carac_serviCustom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('carac_id')->unsigned();
            $table->bigInteger('serviCustom_id')->unsigned();
            $table->timestamps();

            $table->foreign('carac_id')->references('id')->on('caracteristicas');
            $table->foreign('serviCustom_id')->references('id')->on('servico__customs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carac_serviCustom');
    }
}
