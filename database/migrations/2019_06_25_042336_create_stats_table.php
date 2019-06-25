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
        Schema::create('stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('assists');
            $table->integer('champLevel');
            $table->integer('combatPlayerScore');
            $table->integer('damageDealtToObjectives');
            $table->integer('damageDealtToTurrets');
            $table->integer('damageSelfMitigated');
            $table->integer('deaths');
            $table->integer('doubleKills');
            $table->boolean('firstBloodAssist');
            $table->boolean('firstBloodKill');
            $table->boolean('firstInhibitorAssist');
            $table->boolean('firstInhibitorKill');
            $table->boolean('firstTowerAssist');
            $table->boolean('firstTowerKill');
            $table->integer('goldEarned');
            $table->integer('goldSpent');
            $table->integer('inhibitorKills');
            $table->integer('item0');
            $table->integer('item1');
            $table->integer('item2');
            $table->integer('item3');
            $table->integer('item4');
            $table->integer('item5');
            $table->integer('item6');
            $table->integer('killingSprees');
            $table->integer('kills');
            $table->integer('largestCriticalStrike');
            $table->integer('largestKillingSpree');
            $table->integer('largestMultiKill');
            $table->integer('longestTimeSpentLiving');
            $table->integer('magicDamageDealt');
            $table->integer('magicDamageDealtToChampions');
            $table->integer('magicalDamageTaken');
            $table->integer('neutralMinionsKilled');
            $table->integer('objectivePlayerScore');
            $table->integer('participantId');
            $table->integer('pentaKills');
            $table->integer('perk0');
            $table->integer('perk0Var1');
            $table->integer('perk0Var2');
            $table->integer('perk0Var3');
            $table->integer('perk1');
            $table->integer('perk1Var1');
            $table->integer('perk1Var2');
            $table->integer('perk1Var3');
            $table->integer('perk2');
            $table->integer('perk2Var1');
            $table->integer('perk2Var2');
            $table->integer('perk2Var3');
            $table->integer('perk3');
            $table->integer('perk3Var1');
            $table->integer('perk3Var2');
            $table->integer('perk3Var3');
            $table->integer('perk4');
            $table->integer('perk4Var1');
            $table->integer('perk4Var2');
            $table->integer('perk4Var3');
            $table->integer('perk5');
            $table->integer('perk5Var1');
            $table->integer('perk5Var2');
            $table->integer('perk5Var3');
            $table->integer('perkPrimaryStyle');
            $table->integer('perkSubStyle');
            $table->integer('physicalDamageDealt');
            $table->integer('physicalDamageDealtToChampions');
            $table->integer('physicalDamageTaken');
            $table->integer('playerScore0');
            $table->integer('playerScore1');
            $table->integer('playerScore2');
            $table->integer('playerScore3');
            $table->integer('playerScore4');
            $table->integer('playerScore5');
            $table->integer('playerScore6');
            $table->integer('playerScore7');
            $table->integer('playerScore8');
            $table->integer('playerScore9');
            $table->integer('quadraKills');
            $table->integer('sightWardsBoughtInGame');
            $table->integer('statPerk0');
            $table->integer('statPerk1');
            $table->integer('statPerk2');
            $table->integer('timeCCingOthers');
            $table->integer('totalDamageDealt');
            $table->integer('totalDamageDealtToChampions');
            $table->integer('totalDamageTaken');
            $table->integer('totalHeal');
            $table->integer('totalMinionsKilled');
            $table->integer('totalPlayerScore');
            $table->integer('totalScoreRank');
            $table->integer('totalTimeCrowdControlDealt');
            $table->integer('totalUnitsHealed');
            $table->integer('tripleKills');
            $table->integer('trueDamageDealt');
            $table->integer('trueDamageTaken');
            $table->integer('turretKills');
            $table->integer('unrealKills');
            $table->integer('visionScore');
            $table->integer('visionWardsBoughtInGame');
            $table->boolean('win');
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
