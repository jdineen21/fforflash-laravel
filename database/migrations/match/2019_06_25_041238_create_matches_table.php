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
        Schema::connection('match')->create('matches', function (Blueprint $table) {
            $table->integer('gameCreation');
            $table->integer('gameDuration');
            $table->integer('gameId')->primary();
            $table->string('gameMode');
            $table->string('gameType');
            $table->string('gameVersion');
            $table->integer('mapId');
            $table->string('platformId');
            $table->integer('queueId');
            $table->integer('seasonId');
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
        Schema::connection('match')->dropIfExists('matches');
    }
}
