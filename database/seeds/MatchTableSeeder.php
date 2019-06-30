<?php

use Illuminate\Database\Seeder;

use App\Models\Match\Match;
use App\Models\Match\Bans;
use App\Models\Match\Stats;
use App\Models\Match\Team;

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
        $matches = array_unique(explode(PHP_EOL, $seedData));

        echo (count($matches).' matches to load.'.PHP_EOL);
        $this->command->getOutput()->progressStart(count($matches));

        $items = [];
        foreach ($matches as $m => $value) 
        {
            $data = json_decode($matches[$m]);

            if (is_object($data)) 
            {
                unset($data->teams);
                unset($data->participants);
                unset($data->participantIdentities);
                
                array_push($items, (array)$data);
            }
            $this->command->getOutput()->progressAdvance();
        }

        $batch = [];
        foreach ($items as $key => $value) 
        {
            array_push($batch, $value);
            if (count($batch) == 1000) 
            {
                Match::insert($batch);
                $batch = [];
            }
        }
        Match::insert($batch);
        
        $this->command->getOutput()->progressFinish();
    }
}