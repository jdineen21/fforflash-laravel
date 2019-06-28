<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('match')->create('stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('participantId');
            $table->integer('assists')->nullable();
            $table->integer('champLevel')->nullable();
            $table->integer('combatPlayerScore')->nullable();
            $table->integer('damageDealtToObjectives')->nullable();
            $table->integer('damageDealtToTurrets')->nullable();
            $table->integer('damageSelfMitigated')->nullable();
            $table->integer('deaths')->nullable();
            $table->integer('doubleKills')->nullable();
            $table->boolean('firstBloodAssist')->nullable();
            $table->boolean('firstBloodKill')->nullable();
            $table->boolean('firstInhibitorAssist')->nullable();
            $table->boolean('firstInhibitorKill')->nullable();
            $table->boolean('firstTowerAssist')->nullable();
            $table->boolean('firstTowerKill')->nullable();
            $table->integer('goldEarned')->nullable();
            $table->integer('goldSpent')->nullable();
            $table->integer('inhibitorKills')->nullable();
            $table->integer('item0')->nullable();
            $table->integer('item1')->nullable();
            $table->integer('item2')->nullable();
            $table->integer('item3')->nullable();
            $table->integer('item4')->nullable();
            $table->integer('item5')->nullable();
            $table->integer('item6')->nullable();
            $table->integer('killingSprees')->nullable();
            $table->integer('kills')->nullable();
            $table->integer('largestCriticalStrike')->nullable();
            $table->integer('largestKillingSpree')->nullable();
            $table->integer('largestMultiKill')->nullable();
            $table->integer('longestTimeSpentLiving')->nullable();
            $table->integer('magicDamageDealt')->nullable();
            $table->integer('magicDamageDealtToChampions')->nullable();
            $table->integer('magicalDamageTaken')->nullable();
            $table->integer('neutralMinionsKilled')->nullable();
            $table->integer('objectivePlayerScore')->nullable();
            $table->integer('pentaKills')->nullable();
            $table->integer('perk0')->nullable();
            $table->integer('perk0Var1')->nullable();
            $table->integer('perk0Var2')->nullable();
            $table->integer('perk0Var3')->nullable();
            $table->integer('perk1')->nullable();
            $table->integer('perk1Var1')->nullable();
            $table->integer('perk1Var2')->nullable();
            $table->integer('perk1Var3')->nullable();
            $table->integer('perk2')->nullable();
            $table->integer('perk2Var1')->nullable();
            $table->integer('perk2Var2')->nullable();
            $table->integer('perk2Var3')->nullable();
            $table->integer('perk3')->nullable();
            $table->integer('perk3Var1')->nullable();
            $table->integer('perk3Var2')->nullable();
            $table->integer('perk3Var3')->nullable();
            $table->integer('perk4')->nullable();
            $table->integer('perk4Var1')->nullable();
            $table->integer('perk4Var2')->nullable();
            $table->integer('perk4Var3')->nullable();
            $table->integer('perk5')->nullable();
            $table->integer('perk5Var1')->nullable();
            $table->integer('perk5Var2')->nullable();
            $table->integer('perk5Var3')->nullable();
            $table->integer('perkPrimaryStyle')->nullable();
            $table->integer('perkSubStyle')->nullable();
            $table->integer('physicalDamageDealt')->nullable();
            $table->integer('physicalDamageDealtToChampions')->nullable();
            $table->integer('physicalDamageTaken')->nullable();
            $table->integer('playerScore0')->nullable();
            $table->integer('playerScore1')->nullable();
            $table->integer('playerScore2')->nullable();
            $table->integer('playerScore3')->nullable();
            $table->integer('playerScore4')->nullable();
            $table->integer('playerScore5')->nullable();
            $table->integer('playerScore6')->nullable();
            $table->integer('playerScore7')->nullable();
            $table->integer('playerScore8')->nullable();
            $table->integer('playerScore9')->nullable();
            $table->integer('quadraKills')->nullable();
            $table->integer('sightWardsBoughtInGame')->nullable();
            $table->integer('statPerk0')->nullable();
            $table->integer('statPerk1')->nullable();
            $table->integer('statPerk2')->nullable();
            $table->integer('timeCCingOthers')->nullable();
            $table->integer('totalDamageDealt')->nullable();
            $table->integer('totalDamageDealtToChampions')->nullable();
            $table->integer('totalDamageTaken')->nullable();
            $table->integer('totalHeal')->nullable();
            $table->integer('totalMinionsKilled')->nullable();
            $table->integer('totalPlayerScore')->nullable();
            $table->integer('totalScoreRank')->nullable();
            $table->integer('totalTimeCrowdControlDealt')->nullable();
            $table->integer('totalUnitsHealed')->nullable();
            $table->integer('tripleKills')->nullable();
            $table->integer('trueDamageDealt')->nullable();
            $table->integer('trueDamageDealtToChampions')->nullable();
            $table->integer('trueDamageTaken')->nullable();
            $table->integer('turretKills')->nullable();
            $table->integer('unrealKills')->nullable();
            $table->integer('visionScore')->nullable();
            $table->integer('visionWardsBoughtInGame')->nullable();
            $table->boolean('win')->nullable();
            $table->timestamps();

            $table->foreign('participantId')->references('id')->on('participants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
}
