<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*$this->call(ActorsSeeder::class);
        $this->call(ActorMoviesSeeder::class);
        $this->call(ActressSeeder::class);
        $this->call(ActressMoviesSeeder::class);*/


        $this->call(actorSeeder::class);
        $this->call(theatreSeeder::class);
        $this->call(TicketSeeder::class);




    }
}
