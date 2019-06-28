<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('match')->create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('gameId');
            $table->integer('baronKills')->nullable();
            $table->integer('dominionVictoryScore')->nullable();
            $table->integer('dragonKills')->nullable();
            $table->boolean('firstBaron')->nullable();
            $table->boolean('firstBlood')->nullable();
            $table->boolean('firstDragon')->nullable();
            $table->boolean('firstInhibitor')->nullable();
            $table->boolean('firstRiftHerald')->nullable();
            $table->boolean('firstTower')->nullable();
            $table->integer('inhibitorKills')->nullable();
            $table->integer('riftHeraldKills')->nullable();
            $table->integer('teamId')->nullable();
            $table->integer('towerKills')->nullable();
            $table->integer('vilemawKills')->nullable();
            $table->string('win')->nullable();
            $table->timestamps();

            $table->foreign('gameId')->references('gameId')->on('matches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
