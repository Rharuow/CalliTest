<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProMemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_mem', function (Blueprint $table) {
            $table->bigInteger('project_ID')->unsigned();
            $table->foreign('project_ID')->references('id')->on('projects');
            $table->bigInteger('member_ID')->unsigned();
            $table->foreign('member_ID')->references('id')->on('members');
            $table->primary(['member_ID','project_ID']);
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
        Schema::dropIfExists('pro_mems');
    }
}
