<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('biggestErrorTime');
            $table->int('totalError');
            $table->time('totalTime');
            $table->int('touchscreenNum');
            $table->bigInteger('training_ID')->unsigned();
            $table->foreign('training_ID')->references('id')->on('trainings');
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
        Schema::dropIfExists('result_trainings');
    }
}