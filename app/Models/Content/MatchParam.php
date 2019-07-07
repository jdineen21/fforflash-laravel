<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class MatchParam extends Model
{
    protected $connection = 'content';
    protected $table = 'match_param';
    protected $primaryKey = 'id';

    public function wins() 
    {
        return $this->hasMany('App\Models\Content\Wins', 'matchParamId', 'id');
    }
}
