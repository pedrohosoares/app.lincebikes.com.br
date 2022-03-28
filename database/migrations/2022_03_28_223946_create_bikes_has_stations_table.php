<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesHasStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes_has_stations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('bike_id',false,true);
            $table->bigInteger('station_id',false,true);
            $table->string('closekey','255');
            $table->enum('status',['travado','desatravado'])->index();
            $table->foreign('bike_id')->references('id')->on('bikes');
            $table->foreign('station_id')->references('id')->on('stations');
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
        Schema::dropIfExists('bikes_has_stations');
    }
}
