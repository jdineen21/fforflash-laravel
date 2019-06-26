<?php

use Illuminate\Database\Seeder;

use App\Bans;
use App\Matches;
use App\Participants;
use App\Players;
use App\Stats;
use App\Teams;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = env('PATH_SEED_DATA');
        $seedFile = fopen($path, 'r');
        $seedData = fread($seedFile, filesize($path));
        $matches = explode(PHP_EOL, $seedData);

        echo count($matches).' matches to load.'.PHP_EOL;

        foreach ($matches as $x => $value) 
        {
            $data = json_decode($matches[$x]);

            if (is_object($data))
            {
                $m = new Matches();

                $m->gameCreation = $data->gameCreation;
                $m->gameDuration = $data->gameDuration;
                $m->gameId = $data->gameId;
                $m->gameMode = $data->gameMode;
                $m->gameType = $data->gameType;
                $m->gameVersion = $data->gameVersion;
                $m->mapId = $data->mapId;
                $m->platformId = $data->platformId;
                $m->queueId = $data->queueId;
                $m->seasonId = $data->seasonId;

                //$players = $data->players;

                $participants = $data->participants;
                foreach ($participants as $y => $value)
                {
                    $partData = $participants[$y];
                    $part = new Participants();

                    //$part->gameId = $data->gameId;
                    $part->championId = $partData->championId;
                    $part->highestAchievedSeasonTier = $partData->highestAchievedSeasonTier;
                    // $part->accountId = ;
                    $part->spell1Id = $partData->spell1Id;
                    $part->spell2Id = $partData->spell2Id;
                    $part->teamId = $partData->teamId;
                }

                try 
                {
                    // Very poorly optimised as currently implemented
                    // Try batch pushes to database
                    $m->save();
                } 
                catch (Exception $e) 
                {
                    // echo $e;
                }
            }
        }
    }
}
