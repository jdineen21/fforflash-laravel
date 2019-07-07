<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $connection = 'match';
    protected $table = 'teams';
    protected $primaryKey = 'id';

    public function participants () 
    {
        return $this->belongsToMany('App\Models\Match\Participant');
    }
}
