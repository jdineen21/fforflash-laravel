<?php

use Illuminate\Database\Seeder;

use App\Models\Content\MatchParam;
use App\Models\Content\Wins;

class ContentSeeder extends Seeder
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
        $matches_raw = array_unique(explode(PHP_EOL, $seedData));

        echo('Main Loop 1/2'.PHP_EOL);
        $this->command->getOutput()->progressStart(count($matches_raw)*10);

        $match_param_pkey = [];
        $match_param_rows = [];

        $wins_pkey = [];
        $wins_rows = [];
        foreach ($matches_raw as $match_raw) 
        {
            $match = json_decode($match_raw);
            if (is_object($match)) 
            {
                foreach ($match->participants as $participant) 
                {
                    // Match Param Table
                    $match_param_row = [
                        'championKey' => $participant->championId,
                        'queueId' => $match->queueId,
                        'gameVersion' => substr($match->gameVersion, 0, 4),
                        'platformId' => $match->platformId,
                    ];
                    $match_param_row['id'] = unpack('V2', hash('sha256', implode('.', $match_param_row), true))[1];

                    if (!in_array($match_param_row['id'], $match_param_pkey)) 
                    {
                        array_push($match_param_pkey, $match_param_row['id']);
                        array_push($match_param_rows, $match_param_row);
                    }

                    // Wins Table
                    $wins_row = [
                        'id' => $match_param_row['id'],
                        'wins' => (int)$participant->stats->win,
                        'matches' => 1,
                    ];

                    if (!in_array($match_param_row['id'], $wins_pkey)) 
                    {
                        array_push($wins_pkey, $match_param_row['id']);
                        array_push($wins_rows, $wins_row);
                    }
                    else 
                    {
                        $key = array_search($match_param_row['id'], $wins_pkey);
                        $wins_rows[$key]['wins'] += (int)$participant->stats->win;
                        $wins_rows[$key]['matches'] += 1;
                    }

                    $this->command->getOutput()->progressAdvance();
                }
            }
        }
        $this->command->getOutput()->progressFinish();
        echo('Match Param Batch Insert 2/3'.PHP_EOL);
        $this->command->getOutput()->progressStart(count($wins_rows));

        $batch = [];
        foreach ($match_param_rows as $key => $value) 
        {
            array_push($batch, $value);
            if (count($batch) == 100) 
            {
                MatchParam::insert($batch);
                $batch = [];
            }
            $this->command->getOutput()->progressAdvance();
        }
        MatchParam::insert($batch);

        $this->command->getOutput()->progressFinish();
        echo('Wins Batch Insert 3/3'.PHP_EOL);
        $this->command->getOutput()->progressStart(count($wins_rows));

        $batch = [];
        foreach ($wins_rows as $key => $value) 
        {
            array_push($batch, $value);
            if (count($batch) == 100) 
            {
                Wins::insert($batch);
                $batch = [];
            }
            $this->command->getOutput()->progressAdvance();
        }
        Wins::insert($batch);

        $this->command->getOutput()->progressFinish();
    }
}
