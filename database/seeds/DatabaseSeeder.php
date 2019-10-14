<?php

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
        // $this->call(PlayerSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(SeasonSeeder::class);
        $this->call(MatchesSeeder::class);
        $this->call(LegsSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
