<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $connection = 'match';
    protected $table = 'matches';
    protected $primaryKey = 'gameId';

    public function player()
    {
        return $this->belongsToMany('App\Models\Match\Player', 'participants', 'gameId', 'player_id')->withPivot('championId', 'highestAchievedSeasonTier', 'spell1Id', 'spell2Id', 'teamId');
    }

    public function participant()
    {
        return $this->hasMany('App\Models\Match\Participant', 'gameId', 'gameId');
    }
}
