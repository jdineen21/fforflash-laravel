<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('match')->create('players', function (Blueprint $table) {
            $table->string('accountId')->primary();
            $table->string('currentAccountId');
            $table->string('currentPlatformId');
            $table->string('matchHistoryUri');
            $table->string('platformId');
            $table->integer('profileIcon');
            $table->string('summonerId');
            $table->string('summonerName');
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
        Schema::connection('match')->dropIfExists('players');
    }
}
