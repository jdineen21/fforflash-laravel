<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Champion\Champion;

use App\Models\Content\MatchParam;
use App\Models\Content\Wins;

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

        $path = env('PATH_SEED_DATA');
        $seedFile = fopen($path, 'r');
        $seedData = fread($seedFile, filesize($path));
        $matches_raw = array_unique(explode(PHP_EOL, $seedData));

        $dataset_size = count($matches_raw);

        $matches = MatchParam::where([
            ['championKey', $champion->key], 
            ['queueId', 420]
        ])->first()->wins()->get();

        return $matches;

        $champion_stats = new BaseModel;
        $wins = 0;
        foreach ($matches as $match) {
            $wins = $wins + $match->win;
        }
        $champion_stats->win_rate = round($wins/count($matches)*100, 2);
        $champion_stats->pick_rate = round((count($matches)/$dataset_size)*100, 2);
        $champion_stats->matches = count($matches);

        $skill_pattern = [0, 1, 2, 0, 0, 3, 0, 2, 0, 2, 3, 2, 2, 1, 1, 3, 1, 1];

        return view('champions.show', compact('indiv_champion', 'champion_stats', 'skill_pattern'));
    }
}
