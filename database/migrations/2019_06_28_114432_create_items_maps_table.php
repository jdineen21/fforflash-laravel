<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $connection = 'static';

    public function up()
    {
        Schema::connection('static')->create('items_maps', function (Blueprint $table) {
            $table->integer('items_key')->primary();
            $table->boolean('10');
            $table->boolean('11');
            $table->boolean('12');
            $table->boolean('22');
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
        Schema::dropIfExists('items_maps');
    }
}
