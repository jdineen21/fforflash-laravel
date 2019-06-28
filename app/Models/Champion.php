<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $table = 'champions';
    protected $primaryKey = 'key';

    public function info()
    {
        return $this->hasOne('App\Models\Champion\Info', 'champions_key');
    }

    public function image()
    {
        return $this->hasOne('App\Models\Champion\Image', 'champions_key');
    }

    public function stats() 
    {
        return $this->hasOne('App\Models\Champion\Stats', 'champions_key');
    }
}
