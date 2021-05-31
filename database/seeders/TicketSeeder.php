<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_movie_tickets')->insert(array(

            array(
            'TotalPerson'=>6,
            'customer_id' => 1,
            'addmovie_id' => 6,
        ),
            array(
                'TotalPerson'=>4,
                'customer_id' => 2,
                'addmovie_id' => 6,
            )
    ));
    }
}
