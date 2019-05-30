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
        Schema::create('caracteristica_servico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('caracteristica_id')->unsigned();
            $table->bigInteger('servico_id')->unsigned();
            $table->timestamps();

            $table->foreign('caracteristica_id')->references('id')->on('caracteristicas')->onDelete('restrict');
            $table->foreign('servico_id')->references('id')->on('servicos')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('caracteristicas_servico');
    }
}
