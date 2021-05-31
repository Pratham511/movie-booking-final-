<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\actor;
use Carbon\Carbon;


class actorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert(array(

            array(
                'm_id'=>6,
                'ActorName' => "tiger",
                'ActorBio' => 'dancer,gamer',
                'ActorBirth' => Carbon::parse('1991-09-08'),
            ),
            array(
                'm_id'=>7,
                'ActorName' => "deepika padkon",
                'ActorBio' => 'stylist',
                'ActorBirth' => Carbon::parse('1995-05-11'),
            ),
        array(
            'm_id'=>8,
                'ActorName' => "salman",
                'ActorBio' => 'dancer,gamer',
                'ActorBirth' => Carbon::parse('1991-09-08'),
            ),
            array(
                'm_id'=>6,
                'ActorName' => "ranbeer",
                'ActorBio' => 'stylist',
                'ActorBirth' => Carbon::parse('1995-05-11'),
            )
        ));
    }
}
