<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $connection = 'match';
    protected $table = 'matches';
    protected $primaryKey = 'id';

    public function player()
    {
        return $this->belongsToMany('App\Models\Match\Player', 'participants', 'id', 'match_id');
    }
}
