<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class Wins extends Model
{
    protected $connection = 'content';
    protected $table = 'wins';
    protected $primaryKey = 'id';

    public function match_param() 
    {
        return $this->belongsTo('App\Models\Content\MatchParam', 'id', 'matchParamId');
    }
}
