<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChampionsImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions_image', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full');
            $table->string('sprite');
            $table->string('group');
            $table->integer('x');
            $table->integer('y');
            $table->integer('w');
            $table->integer('h');
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
        Schema::dropIfExists('champions_image');
    }
}
