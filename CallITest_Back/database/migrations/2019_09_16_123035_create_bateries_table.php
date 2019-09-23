<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBateriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tryNum');
            $table->time('tryTime');
            $table->time('errorTime');
            $table->time('rewardTime');
            $table->time('showingTime');
            $table->bigInteger('test_id')->unsigned();
            $table->foreign('test_id')->references('id')->on('tests');
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
        Schema::dropIfExists('bateries');
    }
}
