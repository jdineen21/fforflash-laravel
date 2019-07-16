<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    protected $connection = 'content';
    protected $table = 'meta';
    protected $primaryKey = 'id';

}
