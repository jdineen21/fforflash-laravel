<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champion\Champion;

class ChampionsController extends Controller
{
    public function index ()
    {
        $champions = Champion::all();

        return view('champions.index', compact('champions'));
    }
}
