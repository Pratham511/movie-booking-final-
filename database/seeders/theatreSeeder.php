<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class theatreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theatres')->insert(array(

            array(
                'TheatreName' => "ragini",
                'TheatreCity' => 'ankleshwar',
                'RunTime'=>'3pm',
                'addmovie_id' => '6',
            ),
            array(
                'TheatreName' => "ragini",
                'TheatreCity' => 'ankleshwar',
                'RunTime'=>'6pm',
                'addmovie_id' => '6',
            ),
            array(
                'TheatreName' => "ragini",
                'TheatreCity' => 'ankleshwar',
                'RunTime'=>'6pm',
                'addmovie_id' => '7',
            ),
            array(
                'TheatreName' => "ragini",
                'TheatreCity' => 'ankleshwar',
                'RunTime'=>'9pm',
                'addmovie_id' => '8',
            ),
            array(
                'TheatreName' => "frame",
                'TheatreCity' => 'bharuch',
                'RunTime'=>'3pm',
                'addmovie_id' => '6',
            ),

            array(
                'TheatreName' => "frame",
                'TheatreCity' => 'bharuch',
                'RunTime'=>'6pm',
                'addmovie_id' => '7',
            ),
            array(
                'TheatreName' => "frame",
                'TheatreCity' => 'bharuch',
                'RunTime'=>'9pm',
                'addmovie_id' => '8',
            )
        ));
    }
}
