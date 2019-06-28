<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions.stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hp');
            $table->integer('hpperlevel');
            $table->integer('mp');
            $table->integer('mpperlevel');
            $table->integer('movespeed');
            $table->integer('armor');
            $table->integer('armorperlevel');
            $table->integer('spellblock');
            $table->integer('spellblockperlevel');
            $table->integer('attackrange');
            $table->integer('hpregen');
            $table->integer('hpregenperlevel');
            $table->integer('mpregen');
            $table->integer('mpregenperlevel');
            $table->integer('crit');
            $table->integer('critperlevel');
            $table->integer('attackdamage');
            $table->integer('attackdamageperlevel');
            $table->integer('attackspeedperlevel');
            $table->integer('attackspeed');
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
        Schema::dropIfExists('champions_stats');
    }
}
