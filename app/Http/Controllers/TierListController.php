<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Content\MatchParam;
use App\Models\Content\Meta;
use App\Models\Content\Wins;

use App\Models\Champion\Champion;

class TierListController extends Controller
{
    public function index() 
    {
        $champions = Champion::all();
        $dataset_size = Meta::first()->matches;

        $stats = [];
        foreach ($champions as $champion) {
            $match_param = MatchParam::where([
                ['championKey', $champion->key], 
                ['queueId', 420]
            ])->first();

            $champion_wins = $match_param->wins()->get()->first();
            $wins = $champion_wins->wins;
            $matches = $champion_wins->matches;

            $champion_stats = new BaseModel;
            $champion_stats->champion = $champion;
            $champion_stats->win_rate = round(($wins/$matches)*100, 2);
            $champion_stats->pick_rate = round(($matches/$dataset_size)*100, 2);
            $champion_stats->matches = $matches;
            array_push($stats, $champion_stats);
        }

        usort($stats, function($a, $b) {
            return $b['win_rate'] <=> $a['win_rate'];
        });

        return view('tier.index', compact('stats'));
    }
}
