<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class MatchParam extends Model
{
    protected $connection = 'content';
    protected $table = 'match_param';
    protected $primaryKey = 'id';

<<<<<<< HEAD
    public function wins() 
    {
        return $this->hasMany('App\Models\Content\Wins', 'matchParamId', 'id');
=======
    public function champion_image() 
    {
        return $this->hasMany('App\Models\Content\ChampionImage', 'matchParamId', 'id');
>>>>>>> 52f8703d0c1672a47ec474c6b2251f76e0ba9068
    }
}
