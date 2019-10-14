<?php

use App\Season;
use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Season::create([
            'name' => '2017-18',
        ]);

        Season::create([
            'name' => '2018-19',
        ]);

    }
}
