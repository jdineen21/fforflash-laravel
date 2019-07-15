<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('content')->create('wins', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('wins');
            $table->integer('matches');
            $table->timestamps();

            $table->foreign('id')->references('id')->on('match_param');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('content')->dropIfExists('wins');
    }
}
