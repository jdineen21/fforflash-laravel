<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $connection = 'static';
    protected $table = 'items';
    protected $primaryKey = 'key';

    public function image()
    {
        return $this->hasOne('App\Models\Item\Image', 'items_key');
    }

    public function gold()
    {
        return $this->hasOne('App\Models\Item\Gold', 'items_key');
    }

    public function maps() 
    {
        return $this->hasOne('App\Models\Item\Maps', 'items_key');
    }
}
