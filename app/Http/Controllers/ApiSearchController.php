<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champion\Champion;

class ApiSearchController extends Controller
{
    public function show() {
        return Champion::select('key', 'champId', 'name')->get();
    }
}
