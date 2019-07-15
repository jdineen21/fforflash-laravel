<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $connection = 'static';
    protected $table = 'items';
    protected $primaryKey = 'key';
}
