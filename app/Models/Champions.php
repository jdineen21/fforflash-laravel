<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Champions extends Model
{
    public function info() 
    {
        return $this->hasOne('App\Models\Champions\Info');
        return $this->hasOne('App\Models\Champions\Image');
        return $this->hasOne('App\Models\Champions\Tags');
        return $this->hasOne('App\Models\Champions\Stats');
    }
}
