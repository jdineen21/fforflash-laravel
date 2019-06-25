<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->integer('gameCreation');
            $table->integer('gameDuration');
            $table->bigIncrements('gameId');
            $table->string('gameMode');
            $table->string('gameType');
            $table->string('gameVersion');
            $table->integer('mapId');
            $table->string('platformId');
            $table->integer('queueId');
            $table->integer('seasonid');
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
        Schema::dropIfExists('matches');
    }
}
