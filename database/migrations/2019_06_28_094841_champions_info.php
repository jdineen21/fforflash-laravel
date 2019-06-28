<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChampionsInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions_info', function (Blueprint $table) {
            $table->integer('champions_key')->primary();
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('magic');
            $table->integer('difficulty');
            $table->timestamps();

            $table->foreign('champions_key')->references('key')->on('champions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('champions_info');
    }
}
