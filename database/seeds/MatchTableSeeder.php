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

        echo (count($matches).' matches to load.'.PHP_EOL);

        

        foreach ($matches as $x => $value) 
        {
            $data = json_decode($matches[$x]);

            dd($data->gameMode);

            if (is_object($data))
            {
                $match = new Matches();
                $participant = new Participant();
                $player = new Player();
                $stats = new Stats();
                $team = new Team();

                $match->gameCreation = $data->gameCreation;
                $match->gameDuration = $data->gameDuration;
                $match->gameId = $data->gameId;
                $match->gameMode = $data->gameMode;
                $match->gameType = $data->gameType;
                $match->gameVersion = $data->gameVersion;
                $match->mapId = $data->mapId;
                $match->platformId = $data->platformId;
                $match->queueId = $data->queueId;
                $match->seasonId = $data->seasonId;

                try 
                {
                    // Very poorly optimised as currently implemented
                    // Try batch pushes to database
                    $match->save();
                } 
                catch (Exception $e) 
                {
                    // echo $e;
                }
            }
        }
    }
}
