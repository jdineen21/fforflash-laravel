<?php

namespace App\Models\Champion;

use Illuminate\Database\Eloquent\Model;

class Champion extends Model
{
    protected $connection = 'static';
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
