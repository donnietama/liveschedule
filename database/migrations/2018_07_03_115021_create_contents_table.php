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
            $table->string('month')->nullable();
            $table->string('opening_estimation')->nullable();
            $table->string('store_location')->nullable();
            $table->string('store_owner')->nullable();
            $table->string('h_44')->nullable();
            $table->string('h_32')->nullable();
            $table->string('h_22')->nullable();
            $table->string('h_21')->nullable();
            $table->string('h_8')->nullable();
            $table->string('h_3')->nullable();
            $table->string('h_2')->nullable();
            $table->string('h')->nullable();
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
