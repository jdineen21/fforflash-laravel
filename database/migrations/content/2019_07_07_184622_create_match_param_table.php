<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchParamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('content')->create('match_param', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('championKey');
            //$table->string('role');
            //$table->string('lane');
            //$table->string('rank');
            //$table->integer('counterKey');
            $table->integer('queueId');
            $table->string('gameVersion');
            $table->string('platformId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('content')->dropIfExists('match_param');
    }
}
