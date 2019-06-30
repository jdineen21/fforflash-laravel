<?php

use Illuminate\Database\Seeder;

use App\Models\Match\Stats;

class StatsTableSeeder extends Seeder
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

        $schema = Schema::connection('match')->getColumnListing('stats');

        dd($schema);

        $items = [];
        foreach ($matches as $m => $value) 
        {
            $data = json_decode($matches[$m]);
            if (is_object($data))
            {
                foreach ($data->participants as $p => $value) 
                {
                    if (!$data->participantIdentities[$p]->player->accountId == '0') 
                    {
                        $stat = $data->participants[$p]->stats;
                        $stat->participant_id = count($items)+1;
                        array_push($items, (array)$stat);
                    }
                }
            }   
        }

        echo (count($items).' stats to load.'.PHP_EOL);
        $this->command->getOutput()->progressStart(count($items));

        $batch = [];
        foreach ($items as $key => $value) 
        {
            array_push($batch, $value);
            if (count($batch) == 1) 
            {
                Stats::insert($batch);
                $batch = [];
            }
            $this->command->getOutput()->progressAdvance();
        }
        Stats::insert($batch);
        
        $this->command->getOutput()->progressFinish();
    }
}
