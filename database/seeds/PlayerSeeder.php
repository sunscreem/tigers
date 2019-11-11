<?php

use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        factory(App\Player::class, 12)->create();
    }
}
