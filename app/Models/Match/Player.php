<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $connection = 'match';
    protected $table = 'players';
    protected $primaryKey = 'id';

    public function match() 
    {
        echo 'Mom';
        return $this->belongsToMany('App\Models\Match\Match', 'participants', 'id', 'player_id');
    }
}
