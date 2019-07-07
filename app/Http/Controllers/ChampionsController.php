<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champion\Champion;

use App\Models\Match\Match;
use App\Models\Match\Participant;

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

        $match = Match::all();

        return $match[0]->participant[0]->team;


        //$matches = Participant::select('gameId')->where('championId', $champion->key)->get();

        //$base_model = new BaseModel;
        //$base_model->matches = count($matches);

        //return (array)$matches[0]->stats();

        $skill_pattern = [0, 1, 2, 0, 0, 3, 0, 2, 0, 2, 3, 2, 2, 1, 1, 3, 1, 1];

        return view('champions.show', compact('indiv_champion', 'base_model', 'skill_pattern'));
    }
}
