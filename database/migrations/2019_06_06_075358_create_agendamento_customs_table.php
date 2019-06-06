<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentoCustomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamento_customs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Data');
            $table->time('Hora');
            $table->string('Notas')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('servico_custom_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('agendamento_customs');
    }
}
