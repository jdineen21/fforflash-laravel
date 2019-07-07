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

        // Unset all primary and foreign keys
        unset($schema[0]);
        unset($schema[1]);
        unset($schema[2]);

        //dd($schema);

        $items = [];
        foreach ($matches as $m => $value) 
        {
            $data = json_decode($matches[$m]);
            if (is_object($data))
            {
                foreach ($data->teams as $t => $value) 
                {
                    dd($value);
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
