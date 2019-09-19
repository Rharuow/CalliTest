<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTryTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_try_trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('firstErroTime');
            $table->time('totalTime');
            $table->integer('touchscreenNum');
            $table->bigInteger('try_training_id')->unsigned();
            $table->foreign('try_training_id')->references('id')->on('try_trainings');
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
        Schema::dropIfExists('result_try_trainings');
    }
}
