<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function player()
    {
        return Player::class();
    }
}
