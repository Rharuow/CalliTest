<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultBateriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_bateries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('biggestErrorTime');
            $table->integer('totalError');
            $table->time('totalTime');
            $table->integer('touchscreenNum');
            $table->bigInteger('batery_ID')->unsigned();
            $table->foreign('batery_ID')->references('id')->on('bateries');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_bateries');
    }
}
