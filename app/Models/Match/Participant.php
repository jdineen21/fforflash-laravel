<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $connection = 'match';
    protected $table = 'participants';
    protected $primaryKey = 'id';

    public function match() 
    {
        return $this->belongsTo('App\Models\Match\Match');
    }

    public function stats() 
    {
        return $this->hasOne('App\Models\Match\Stats');
    }

    public function team() 
    {
        return $this->hasOne('App\Models\Match\Team');
    }
}
