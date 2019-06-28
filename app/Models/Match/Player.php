<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $connection = 'match';
    protected $table = 'players';
    protected $primaryKey = 'accountId';

    public function match() 
    {
        return $this->belongsToMany('App\Models\Match', 'participants', 'accountId', 'gameId');
    }
}
