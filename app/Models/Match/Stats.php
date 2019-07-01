<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $connection = 'match';
    protected $table = 'stats';
    protected $primaryKey = 'id';

    public function participant() 
    {
        return $this->belongsTo('App\Models\Match\Participant');
    }
}
