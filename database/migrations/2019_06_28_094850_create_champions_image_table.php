<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChampionsImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'static';

    public function up()
    {
        Schema::connection('static')->create('champions_image', function (Blueprint $table) {
            $table->integer('champions_key')->primary();
            $table->string('full');
            $table->string('sprite');
            $table->string('group');
            $table->integer('x');
            $table->integer('y');
            $table->integer('w');
            $table->integer('h');
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
        Schema::dropIfExists('champions_image');
    }
}
