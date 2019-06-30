<?php

use Illuminate\Database\Seeder;

use App\Models\Match\Participant;

class ParticipantTableSeeder extends Seeder
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
                foreach ($data->participants as $p => $value) 
                {
                    if (!$data->participantIdentities[$p]->player->accountId == '0') 
                    {
                        $partData = $data->participants[$p];
                        $player = $data->participantIdentities[$p]->player;

                        unset($partData->participantId);
                        unset($partData->stats);
                        unset($partData->timeline);

                        $partData->gameId = $data->gameId;
                        $partData->player_id = unpack('V2', hash('sha256', $player->accountId, true))[1];

                        $partData = (array)$partData;

                        if (!array_key_exists('highestAchievedSeasonTier', $partData)) 
                        {
                            $partData['highestAchievedSeasonTier'] = NULL;
                        }

                        array_push($items, (array)$partData);
                    }
                }
            }
        }

        echo (count($items).' participants to load.'.PHP_EOL);
        $this->command->getOutput()->progressStart(count($items));

        $batch = [];
        foreach ($items as $key => $value) 
        {
            array_push($batch, $value);
            if (count($batch) == 1000)
            {
                Participant::insert($batch);
                $batch = [];
            }
            $this->command->getOutput()->progressAdvance();
        }
        Participant::insert($batch);
        $this->command->getOutput()->progressFinish();
    }
}
