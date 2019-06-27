<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champions;

class IndexController extends Controller
{
    public function index() 
    {
        $champions = Champions::all()->sortBy('name');

        $url = 'https://euw1.api.riotgames.com/lol/platform/v3/champion-rotations?api_key='.env('RIOT_API_KEY');
        $raw = file_get_contents($url);
        $json = json_decode($raw);
        $freeChampionsIds = $json->freeChampionIds;

        $freeChampions = [];
        foreach ($freeChampionsIds as $x) {
            array_push($freeChampions, Champion::where('key', $x)->first()->champId);
        }
        
        return view('index', compact('champions', 'freeChampions'));
    }
}
