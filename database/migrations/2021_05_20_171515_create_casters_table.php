<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casters', function (Blueprint $table) {
            $table->id();
        });
        Schema::table('casters', function (Blueprint $table)
        {
            $table->unsignedBigInteger('actor_id');
            $table->foreign('actor_id')->references('id')->on('actors');
        });
        Schema::table('casters', function (Blueprint $table)
        {
            $table->unsignedBigInteger('addmovie_id');
            $table->foreign('addmovie_id')->references('id')->on('addmovies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casters');
    }
}
