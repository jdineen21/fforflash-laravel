<?php

use Illuminate\Database\Seeder;

use App\Champion;

class ChampionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        $url = 'http://ddragon.leagueoflegends.com/cdn/9.12.1/data/en_US/champion.json?api_key='.env('RIOT_API_KEY');

        $json = json_decode(file_get_contents($url));

        foreach ($json->data as $key => $value) 
        {
            $data = $json->data->$key;
            $champion = new Champion();

            $champion->version = $data->version;
            $champion->id = $data->id;
            $champion->name = $data->name;
            $champion->title = $data->title;
            $champion->blurb = $data->blurb;

            $champion->save();
        }
    }
}
