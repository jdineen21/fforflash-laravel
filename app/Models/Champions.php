<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Champions extends Model
{
    public function info()
    {
        return $this->hasOne('App\Models\Champions\Info');
    }

    public function image()
    {
        return $this->hasOne('App\Models\Champions\Image');
    }

    public function stats() 
    {
        return $this->hasOne('App\Models\Champions\Stats');
    }
}
