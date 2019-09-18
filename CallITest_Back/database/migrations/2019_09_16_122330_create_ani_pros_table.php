<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAniProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ani_pros', function (Blueprint $table) {
            $table->bigInteger('animal_ID')->unsigned();
            $table->foreign('animal_ID')->references('id')->on('animals');
            $table->bigInteger('project_ID')->unsigned();
            $table->foreign('project_ID')->references('id')->on('projects');
            $table->primary(['animal_ID','project_ID']);
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
        Schema::dropIfExists('ani_pros');
    }
}
