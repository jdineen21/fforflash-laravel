<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champion\Champion;

class IndexController extends Controller
{
    public function index() 
    {
        $champions = Champion::all()->sortBy('name');

        $url = 'https://euw1.api.riotgames.com/lol/platform/v3/champion-rotations?api_key='.env('RIOT_API_KEY');
        $raw = file_get_contents($url);
        $json = json_decode($raw);
        $freeChampionIds = $json->freeChampionIds;
        $freeChampionIdsForNewPlayers = $json->freeChampionIdsForNewPlayers;

        $freeChampions = [];
        foreach ($freeChampionIds as $x) {
            array_push($freeChampions, Champion::where('key', $x)->first());
        }

        $freeChampionsForNewPlayers = [];
        foreach ($freeChampionIdsForNewPlayers as $x) {
            array_push($freeChampionsForNewPlayers, Champion::where('key', $x)->first());
        }
        
        return view('index', compact( 
            'freeChampions', 
            'freeChampionsForNewPlayers'
        ));
    }
}
