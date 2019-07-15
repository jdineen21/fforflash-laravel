<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Maps extends Model
{
    protected $connection = 'static';
    protected $table = 'items_maps';
    protected $primaryKey = 'items_key';
}
