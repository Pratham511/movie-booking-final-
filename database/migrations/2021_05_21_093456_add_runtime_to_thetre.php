<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRuntimeToThetre extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('theatres', function (Blueprint $table) {
                $table->String('RunTime')->after('TheatreCity');

            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('theatres', function (Blueprint $table) {
            $table->dropColumn('RunTime');

        });
    }
}
