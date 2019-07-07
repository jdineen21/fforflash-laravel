<?php

use Illuminate\Database\Seeder;

use App\Models\Item\Item;
use App\Models\Item\Image;
use App\Models\Item\Gold;
use App\Models\Item\Maps;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'http://ddragon.leagueoflegends.com/cdn/9.13.1/data/en_US/item.json?api_key='.env('RIOT_API_KEY');

        $json = json_decode(file_get_contents($url));

        $items = count((array)$json->data);
        echo ($items.' items to load.'.PHP_EOL);
        $this->command->getOutput()->progressStart($items);

        foreach ($json->data as $key => $value)
        {
            $data = $json->data->$key;
            $items = new Item();
            $image = new Image((array)$data->image);
            $gold = new Gold((array)$data->gold);
            $maps = new Maps((array)$data->maps);
            // Stats would go here but variable column issues
            // Will need to have all columns in the table
            // Nullable
            // But only fill ones with the values we have
            // Effect needs to be added along with from and to items
            // Effect needs new table
            // From and to needs new column datatype array

            $items->key = $key;
            $items->name = $data->name;
            $items->description = $data->description;
            $items->colloq = $data->colloq;
            $items->plaintext = $data->plaintext;
            $image->items_key = $key;
            $gold->items_key = $key;
            $maps->items_key = $key;

            $items->save();
            $image->save();
            $gold->save();
            $maps->save();

            $this->command->getOutput()->progressAdvance();
        }
        $this->command->getOutput()->progressFinish();
    }
}
