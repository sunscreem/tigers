<?php

use App\Player;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matchDate = new Carbon('first day of November 2018');

        factory(App\Match::class,20)->create()->each(function($match) use ($matchDate) {

            $match->update(['date'=>$matchDate]);
            $matchDate->addDays(7);

            $match->games()->saveMany(factory(App\Game::class,6)->make());
            $match->games()->saveMany(factory(App\Game::class,3)->make(['type'=>'doubles 501 single in double out']));

        });

    }
}
