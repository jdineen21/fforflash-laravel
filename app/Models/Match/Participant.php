<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $connection = 'match';
    protected $table = 'participants';
    protected $primaryKey = 'id';

    public function stats() 
    {
        return $this->hasOne('App\Models\Match\Stats');
    }
}
