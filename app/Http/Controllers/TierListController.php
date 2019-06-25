<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Champion;

class TierListController extends Controller
{
    public function index() 
    {
        $champions = Champion::all();
        return view('tier.index', compact('champions'));
    }
}
