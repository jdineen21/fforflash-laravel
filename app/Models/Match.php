<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $connection = 'match';
    protected $table = 'matches';
    protected $primaryKey = 'gameId';

    public function player()
    {
        return $this->belongsToMany('App\Models\Match\Player', 'participants', 'gameId', 'accountId');
    }
}
