<?php

use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
<<<<<<< HEAD
    /**
     * Run the database seeds.
     *
     * @return void
     */
=======
>>>>>>> master
    public function run()
    {
        factory(App\Player::class, 12)->create();
    }
}
