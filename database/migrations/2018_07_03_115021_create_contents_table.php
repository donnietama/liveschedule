<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('month');
            $table->string('opening_estimation');
            $table->string('store_location');
            $table->string('store_owner');
            $table->string('h_44');
            $table->string('h_32');
            $table->string('h_22');
            $table->string('h_21');
            $table->string('h_8');
            $table->string('h_3');
            $table->string('h_2');
            $table->string('h');
            $table->string('additional_info')->nullable();
            $table->string('accountability');
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
        Schema::dropIfExists('contents');
    }
}
