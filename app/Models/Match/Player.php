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
        return $this->belongsToMany('App\Models\Match\Match', 'participants', 'player_id', 'gameId')->withPivot('championId', 'highestAchievedSeasonTier', 'spell1Id', 'spell2Id', 'teamId');
    }
}