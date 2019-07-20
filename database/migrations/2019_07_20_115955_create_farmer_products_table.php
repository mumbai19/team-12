<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmerProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fishname');
            $table->string('tags');
            $table->integer('farmer_id')->unsigned();
            $table->foreign('farmer_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('text')->nullable();
            $table->string('cost');

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
        Schema::dropIfExists('farmer_products');
    }
}
