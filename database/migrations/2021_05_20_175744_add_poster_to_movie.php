<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPosterToMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addmovies', function (Blueprint $table) {
            $table->String('MoviePoster')->after('MovieName');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addmovies', function (Blueprint $table) {
            $table->dropColumn('MoviePoster');

        });
    }
}
