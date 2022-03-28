<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricalHasBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical_has_bikes', function (Blueprint $table) {
            $table->bigInteger('historical_id',false,true);
            $table->bigInteger('bike_id',false,true);

            $table->foreign('historical_id')->references('id')->on('historical');
            $table->foreign('bike_id')->references('id')->on('bikes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historical_has_bikes');
    }
}
