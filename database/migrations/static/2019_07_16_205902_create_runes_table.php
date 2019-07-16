<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('static')->create('runes', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('keystoneId');
            $table->string('key');
            $table->string('icon');
            $table->string('name');
            $table->string('shortDesc');
            $table->string('longDesc');
            $table->timestamps();

            //$table->foreign('keystoneId')->references('id')->on('keystone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('static')->dropIfExists('runes');
    }
}
