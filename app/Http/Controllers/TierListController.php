<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Champion\Champion;
use App\Models\Match\Match;
use App\Models\Match\Participant;
use App\Models\Match\Stats;

class TierListController extends Controller
{
    public function index() 
    {
        $stats = Stats::all();
        $champions = Champion::all();

        //return $champions;

        $tierData = [];
        foreach ($champions as $key => $value) {
            $tierData[$value->key] = [];
            $tierData[$value->key]['name'] = $value->name;
            $tierData[$value->key]['wins'] = 0;
            $tierData[$value->key]['games'] = 0;
        }

        foreach ($stats as $key => $value) {
            $tierData[$value->participant->championId]['wins'] = $tierData[$value->participant->championId]['wins']+$value->win;
            $tierData[$value->participant->championId]['games'] = $tierData[$value->participant->championId]['games']+1;
        }

        foreach ($tierData as $key => $value) {
            $tierData[$key]['winrate'] = round($tierData[$key]['wins']/$tierData[$key]['games']*100, 2);
        }

        //return $tierData;

        // foreach ($match as $match => $matchData) {
        //     foreach (Match::find($matchData->gameId)->participant as $part => $partData) {
        //         $champ = Champion::where('key', $partData->championId)->first()->name;

        //         $tierData[$champ]['wins'] = $tierData[$champ]['wins'] + Participant::find($partData->id)->stats->win;
        //         $tierData[$champ]['games'] = $tierData[$champ]['games'] + 1;
        //     }
        // }

        return $tierData->1;

        return view('tier.index', compact('champions', 'tierData'));
    }
}
