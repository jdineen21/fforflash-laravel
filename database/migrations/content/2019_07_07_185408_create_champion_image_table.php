<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('content')->create('champion_image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matchParamId');
            $table->boolean('win');

            $table->foreign('matchParamId')->references('id')->on('match_param');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('content')->dropIfExists('champion_image');
    }
}
