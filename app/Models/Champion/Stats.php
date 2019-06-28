<?php

namespace App\Models\Champion;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $table = 'champions_stats';
    protected $primaryKey = 'champions_key';

    public function champion() 
    {
        return $this->belongsTo('App\Models\Champion', 'champions_key');
    }
}