<?php

namespace App\Models\Match;

use Illuminate\Database\Eloquent\Model;

class Bans extends Model
{
    protected $connection = 'match';
    protected $table = 'bans';
    protected $primaryKey = 'id';
}
