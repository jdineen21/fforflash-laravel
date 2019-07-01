<?php

use Illuminate\Database\Seeder;

use App\Models\Champion;
use App\Models\Champion\Info;
use App\Models\Champion\Image;
use App\Models\Champion\Stats;

class ChampionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        $url = 'http://ddragon.leagueoflegends.com/cdn/9.13.1/data/en_US/champion.json';//?api_key='.env('RIOT_API_KEY');

        $json = json_decode(file_get_contents($url));

        $items = count((array)$json->data);
        echo ($items.' champions to load.'.PHP_EOL);
        $this->command->getOutput()->progressStart($items);

        foreach ($json->data as $key => $value) 
        {
            $data = $json->data->$key;
            $champion = new Champion();
            $info = new Info((array)$data->info);
            $image = new Image((array)$data->image);
            $stats = new Stats((array)$data->stats);

            $champion->version = $data->version;
            $champion->champId = $data->id;
            $champion->key = $data->key;
            if ($data->name == 'Nunu & Willump') {
                $champion->name = 'Nunu';
            } else {
                $champion->name = $data->name;
            }
            $champion->title = $data->title;
            $champion->blurb = $data->blurb;
            $info->champions_key = $data->key;
            $image->champions_key = $data->key;
            $champion->tags = implode(' ', $data->tags);
            $champion->partype = $data->partype;
            $stats->champions_key = $data->key;

            $champion->save();
            $info->save();
            $image->save();
            $stats->save();

            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
