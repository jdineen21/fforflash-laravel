<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Champion;

class IndexController extends Controller
{
    public function index() 
    {
        // Champion::where('key', '145')->first()->name;
        $champions = Champion::all();

        $url = 'https://euw1.api.riotgames.com/lol/platform/v3/champion-rotations?api_key='.env('RIOT_API_KEY');
        $raw = file_get_contents($url);
        $json = json_decode($raw);
        $freeChampionsIds = $json->freeChampionIds;

        $freeChampions = [];
        //dd($freeChampions);
        foreach ($freeChampionsIds as $id) {
            array_push($freeChampions, Champion::where('key', $id)->first()->name);
        }

        return view('index', compact('champions', 'freeChampions'));
    }
}
