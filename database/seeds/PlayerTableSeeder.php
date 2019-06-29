<?php

use Illuminate\Database\Seeder;

use App\Models\Match\Player;

class PlayerTableSeeder extends Seeder
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

        $items = [];
        foreach ($matches as $m => $value)
        {
            $data = json_decode($matches[$m]);

            if (is_object($data)) 
            {
                foreach ($data->participantIdentities as $pi => $value) 
                {
                    if (!$data->participantIdentities[$pi]->player->accountId == '0') {
                        $player = $data->participantIdentities[$pi]->player;
                        
                        $p = (array)$player;
                        $p['id'] = hash('md5', $player->accountId);
                        array_push($items, $p);
                    }
                }
            }
        }

        echo (count($items).' players to load.'.PHP_EOL);
        $this->command->getOutput()->progressStart(count($items));

        $batch = [];
        $blacklist = [];
        foreach ($items as $key => $value) 
        {
            if (!in_array($value['accountId'], $blacklist)) {
                array_push($batch, $value);
                array_push($blacklist, $value['accountId']);
                if (count($batch) == 50)
                {
                    Player::insert($batch);
                    $batch = [];
                }
            }
            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
