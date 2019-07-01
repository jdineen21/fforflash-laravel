<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('match')->create('bans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('teamId');
            $table->integer('pickTurn')->nullable();
            $table->integer('championId')->nullable();

            $table->foreign('teamId')->references('teamId')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('match')->dropIfExists('bans');
    }
}
