<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'items_image';
    protected $primaryKey = 'items_key';

    public function item() 
    {
        return $this->belongsTo('App\Models\Item', 'items_key');
    }
}
