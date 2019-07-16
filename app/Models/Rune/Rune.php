<?php

namespace App\Models\Rune;

use Illuminate\Database\Eloquent\Model;

class Rune extends Model
{
    protected $connection = 'static';
    protected $table = 'runes';
    protected $primaryKey = 'id';
}
