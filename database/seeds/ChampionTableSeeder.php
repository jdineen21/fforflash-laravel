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
        $url = 'http://ddragon.leagueoflegends.com/cdn/9.13.1/data/en_US/champion.json?api_key='.env('RIOT_API_KEY');

        $json = json_decode(file_get_contents($url));

        dd($json->data->Zyra);

        foreach ($json->data as $key => $value) 
        {
            $data = $json->data->$key;
            $champion = new Champion();

            $champion->version = $data->version;
            $champion->champId = $data->id;
            $champion->key = $data->key;
            $champion->name = $data->name;
            $champion->title = $data->title;
            $champion->blurb = $data->blurb;
            $champion->info = $data->info;
            $champion->image = $data->image;
            $champion->tags = $data->tags;
            $champion->partype = $data->partype;
            $champion->stats = $data->stats;

            $champion->save();
        }
    }
}
