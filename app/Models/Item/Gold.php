<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Gold extends Model
{
    protected $connection = 'static';
    protected $table = 'items_gold';
    protected $primaryKey = 'items_key';

    public function item() 
    {
        return $this->belongsTo('App\Models\Item', 'items_key');
    }
}
