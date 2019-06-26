<?php

use Illuminate\Database\Seeder;

use App\Items;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'http://ddragon.leagueoflegends.com/cdn/9.12.1/data/en_US/item.json?api_key='.env('RIOT_API_KEY');

        $json = json_decode(file_get_contents($url));

        foreach ($json->data as $key => $value)
        {
            $data = $json->data->$key;
            $items = new Items();

            $items->name = $data->name;
            $items->description = $data->description;
            $items->colloq = $data->colloq;
            $items->plaintext = $data->plaintext;

            $items->save();
        }
    }
}
