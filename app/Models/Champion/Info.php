<?php

namespace App\Models\Champion;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table = 'champions_info';
    protected $primaryKey = 'champions_key';

    public function champion() 
    {
        return $this->belongsTo('App\Models\Champion', 'champions_key');
    }
}