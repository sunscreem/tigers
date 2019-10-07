<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Team::class, 4)->create()->each(function($team){
            $team->players()->save(factory(App\Player::class,6)->make());
        });

    }
}
