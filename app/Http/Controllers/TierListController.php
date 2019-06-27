<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Champion;
use App\Matches;

class TierListController extends Controller
{
    public function index() 
    {
        $champions = Champion::all();

        $matches = DB::table('matches')->where([['gameMode', 'CLASSIC'], ['queueId', '400']])->get();

        return count($matches);

        $tierData = array();
        foreach ($champions as $champ) {
            array_push($tierData, [$champ->key => ['name' => $champ->name, 'champId' => $champ->champId, 'wins' => 0, 'bans' => 0, 'matches' => 0]]);
        }
        array_push($tierData, ['totalMatches' => 0]);
        
        // return $tierData;
        
        foreach ($matches as $match) {
            $participants = DB::table('participants')->where();
        }

        return $tierData;

        return view('tier.index', compact('champions', 'tierData'));
    }
}
