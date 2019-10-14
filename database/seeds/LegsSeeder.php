<?php

use App\Match;
use Illuminate\Database\Seeder;

class LegsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Match::all()->each(function ($match){
            $match->games->each(function ($game){

                // $games->legs will give you the number of legs to attach players and a score too!
                // think that through though.

            });
        });
    }
}
