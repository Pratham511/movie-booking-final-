<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheatresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theatres', function (Blueprint $table) {
            $table->id();
            $table->string('TheatreName');
            $table->string('TheatreCity');
            $table->timestamps();
        });
        Schema::table('theatres', function (Blueprint $table)
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
        Schema::dropIfExists('theatres');
    }
}
