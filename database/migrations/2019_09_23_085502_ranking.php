<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ranking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->bigIncrements('rid');
            $table->string('username');
            $table->integer('ranking');
            $table->integer('win');
            $table->integer('loss');
            $table->integer('rating_points');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rankings');
    }
}
