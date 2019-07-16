<?php

namespace App\Models\Rune;

use Illuminate\Database\Eloquent\Model;

class Keystone extends Model
{
    protected $connection = 'static';
    protected $table = 'keystone';
    protected $primaryKey = 'id';
}
