<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $connection = 'match';
    protected $table = 'teams';
    protected $primaryKey = 'id';
}
