<?php

use Illuminate\Database\Seeder;

use App\Models\Match\Team;

class TeamTableSeeder extends Seeder
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

        $schema = Schema::connection('match')->getColumnListing('teams');

        dd($schema);

        unset($schema[0]);
        unset($schema[1]);

        $items = [];
        foreach ($matches as $m => $value) 
        {
            $data = json_decode($matches[$m]);
            if (is_object($data))
            {
                foreach ($data->teams as $t => $value) 
                {
                    if (!$data->participantIdentities[$p]->player->accountId == '0') 
                    {
                        $stat = [];
                        $stat['participant_id'] = count($items)+1;
                        foreach ($schema as $key => $value) 
                        {
                            if (isset($data->participants[$p]->stats->$value))
                            {
                                $stat[$value] = $data->participants[$p]->stats->$value;
                            }
                            else
                            {
                                $stat[$value] = null;
                            }
                        }
                        array_push($items, $stat);
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
            if (count($batch) == 100) 
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
