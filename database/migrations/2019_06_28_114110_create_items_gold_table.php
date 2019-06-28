<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsGoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_gold', function (Blueprint $table) {
            $table->integer('items_key')->primary();
            $table->integer('base');
            $table->boolean('purchasable');
            $table->integer('total');
            $table->integer('sell');
            $table->timestamps();

            $table->foreign('items_key')->references('key')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_gold');
    }
}
