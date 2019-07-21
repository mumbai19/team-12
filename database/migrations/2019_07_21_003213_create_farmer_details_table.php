<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('farmer_id')->unsigned();
            $table->foreign('farmer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('ph')->nullable();
            $table->string('o2')->nullable();
            $table->string('area')->nullable();
            $table->string('depth')->nullable();
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
        Schema::dropIfExists('farmer_details');
    }
}
