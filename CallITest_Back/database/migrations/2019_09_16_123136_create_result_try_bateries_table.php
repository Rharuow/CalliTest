<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTryBateriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_try_bateries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('firstErroTime');
            $table->time('totalTime');
            $table->integer('touchscreenNum');
            $table->bigInteger('try_batery_id')->unsigned();
            $table->foreign('try_batery_id')->references('id')->on('try_bateries');
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
        Schema::dropIfExists('result_try_bateries');
    }
}
