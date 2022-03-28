<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersHasSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_has_signatures', function (Blueprint $table) {
            $table->bigInteger('user_id',false,true);
            $table->bigInteger('signature_id',false,true);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('signature_id')->references('id')->on('signatures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_has_signatures');
    }
}
