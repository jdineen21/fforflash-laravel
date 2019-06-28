<?php

namespace App\Models\Champion;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $connection = 'static';
    protected $table = 'champions_image';
    protected $primaryKey = 'champions_key';

    public function champion() 
    {
        return $this->belongsTo('App\Models\Champion', 'champions_key');
    }
}