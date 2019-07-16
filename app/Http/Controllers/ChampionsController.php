<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champion\Champion;

use App\Models\Content\MatchParam;
use App\Models\Content\Wins;
use App\Models\Content\Meta;

class ChampionsController extends Controller
{
    public function index ()
    {
        return view('champions.index');
    }

    public function show(Champion $champion) 
    {
        $champId = $champion->champId;
        $url = 'http://ddragon.leagueoflegends.com/cdn/9.13.1/data/en_US/champion/'.$champId.'.json';
        $indiv_champion = json_decode(file_get_contents($url))->data->$champId;

        $dataset_size = Meta::first()->matches;

        $champion = MatchParam::where([
            ['championKey', $champion->key], 
            ['queueId', 420]
        ])->first();

        $champion_wins = $champion->wins()->get()->first();
        $wins = $champion_wins->wins;
        $matches = $champion_wins->matches;

        //return $champion_wins;

        $champion_stats = new BaseModel;
        $champion_stats->win_rate = round(($wins/$matches)*100, 2);
        $champion_stats->pick_rate = round(($matches/$dataset_size)*100, 2);
        $champion_stats->matches = $matches;

        $skill_pattern = [0, 1, 2, 0, 0, 3, 0, 2, 0, 2, 3, 2, 2, 1, 1, 3, 1, 1];

        return view('champions.show', compact('indiv_champion', 'champion_stats', 'skill_pattern'));
    }
}
