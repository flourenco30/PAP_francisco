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
        Schema::create('caracteristica_servico_custom', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('caracteristica_id')->unsigned();
            $table->bigInteger('servico_custom_id')->unsigned();
            $table->timestamps();

            $table->foreign('caracteristica_id')->references('id')->on('caracteristicas');
            $table->foreign('servico_custom_id')->references('id')->on('servico_customs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristica_serviCustom');
    }
}
