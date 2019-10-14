<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
