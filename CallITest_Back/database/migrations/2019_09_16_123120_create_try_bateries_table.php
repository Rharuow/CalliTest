<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTryBateriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('try_bateries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->int('type');
            $table->int('totalError');
            $table->time('totalTime');
            $table->int('touchscreenNum');
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
        Schema::dropIfExists('try_bateries');
    }
}
