<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('champions', function (Blueprint $table) {
            $table->string('version');
            $table->string('champId');
            $table->integer('key')->primary();
            $table->string('name');
            $table->string('title');
            $table->string('blurb');
            $table->binary('info');
            $table->binary('image');
            $table->binary('tags');
            $table->string('partype');
            $table->binary('stats');
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
        Schema::dropIfExists('champions');
    }
}
