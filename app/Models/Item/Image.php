<?php

namespace App\Models\Item;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $connection = 'static';
    protected $table = 'items_image';
    protected $primaryKey = 'items_key';
}
