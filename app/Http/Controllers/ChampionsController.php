<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champion\Champion;

class ChampionsController extends Controller
{
    public function index ()
    {
        return view('champions.index');
    }

    public function show(Champion $champion) 
    {
        $champId = $champion->champId;
        $url = 'http://ddragon.leagueoflegends.com/cdn/9.13.1/data/en_US/champion/'.$champId.'.json';//?api_key='.env('RIOT_API_KEY');
        $indiv_champion = json_decode(file_get_contents($url))->data->$champId;

        //return (array)$indiv_champion;

        return view('champions.show', compact('indiv_champion'));
    }
}
