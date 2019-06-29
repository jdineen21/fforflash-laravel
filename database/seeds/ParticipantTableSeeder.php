<?php

use Illuminate\Database\Seeder;

use App\Models\Match\Match;
use App\Models\Match\Participant;
use App\Models\Match\Player;

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

        $items = 0;
        foreach ($matches as $m => $value)
        {
            $data = json_decode($matches[$m]);
            if (is_object($data)) {
                foreach ($data->participants as $p => $value) {
                    $items++;
                }
            }
        }

        echo ($items.' participants to load.'.PHP_EOL);
        $this->command->getOutput()->progressStart($items);

        foreach ($matches as $m => $value)
        {
            $data = json_decode($matches[$m]);
            if (is_object($data)) {
                foreach ($data->participants as $p => $value) {
                    $partData = $data->participants[$p];

                    $participantId = $partData->participantId;

                    unset($partData->participantId);
                    unset($partData->stats);
                    unset($partData->timeline);

                    $part = new Participant((array)$partData);

                    try {
                        $part->gameId = $data->gameId;
                        $part->player_id = hash('md5', $part->accountId);
                    } 
                    catch (Exception $e) {
                        echo ($data->participantIdentities[$participantId-1]->player->accountId);
                        dd($e);
                    }
                    $this->command->getOutput()->progressAdvance();

                    try {
                        $part->save();
                    } 
                    catch (Exception $e) {
                        dd($e);
                    }
                }
            }
        }
        $this->command->getOutput()->progressFinish();
    }
}
