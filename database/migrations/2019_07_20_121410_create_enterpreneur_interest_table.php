<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterpreneurInterestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrepreneur_interest', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('farmer_id')->unsigned();
            $table->foreign('farmer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('entrepreneur_id')->unsigned();
            $table->foreign('entrepreneur_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('entrepreneur_interest');
    }
}
