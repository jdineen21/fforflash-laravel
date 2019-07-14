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

        $this->command->getOutput()->progressStart(count($matches_raw)*10);

        $champion_image_items = [];
        foreach ($matches_raw as $match_raw) 
        {
            $match = json_decode($match_raw);
            if (is_object($match)) 
            {
                foreach ($match->participants as $participant) 
                {
                    $match_param_row = [
                        'championKey' => $participant->championId,
                        'queueId' => $match->queueId,
                        'gameVersion' => substr($match->gameVersion, 0, 4),
                        'platformId' => $match->platformId,
                    ];
                    $match_param_row['id'] = unpack('V2', hash('sha256', implode('.', $match_param_row), true))[1];

                    if (!MatchParam::find($match_param_row['id'])) 
                    {
                        MatchParam::insert($match_param_row);
                    }

                    // Slow AF

                    $champion_image_row = [
                        'id' => $match_param_row['id'],
                        'wins' => $participant->stats->win,
                        'matches' => 1,
                    ];
                    
                    if (!Wins::find($champion_image_row['id'])) 
                    {
                        Wins::insert($champion_image_row);
                    }
                    else 
                    {
                        $wins = Wins::find($champion_image_row['id'])->wins+$participant->stats->win;
                        $matches = Wins::find($champion_image_row['id'])->matches+1;
                        Wins::where('id', $champion_image_row['id'])->update(['wins' => $wins, 'matches' => $matches]);
                    }

                    // End Slow AF

                    $this->command->getOutput()->progressAdvance();
                }
            }
        }
    }
}
