<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTryTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('try_trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->int('type');
            $table->int('shape');
            $table->time('color');
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
        Schema::dropIfExists('try_trainings');
    }
}
