<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookMovieTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_movie_tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('TotalPerson');
            $table->timestamps();
        });
        Schema::table('book_movie_tickets', function (Blueprint $table)
        {
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
        Schema::table('book_movie_tickets', function (Blueprint $table)
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
        Schema::dropIfExists('book_movie_tickets');
    }
}
