<?php

use Illuminate\Database\Seeder;

use App\Models\Rune\Keystone;
use App\Models\Rune\Rune;

class RuneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'http://ddragon.leagueoflegends.com/cdn/9.13.1/data/en_US/runesReforged.json';

        $json = json_decode(file_get_contents($url));

        $keystone_rows = [];
        $runes_rows = [];
        foreach ($json as $value) {
            $keystone_row = [
                'id' => $value->id,
                'key' => $value->key,
                'icon' => $value->icon,
                'name' => $value->name,
            ];
            array_push($keystone_rows, $keystone_row);
            foreach ($value->slots as $slots) {
                foreach ($slots as $runes) {
                    foreach ($runes as $rune) {
                        $runes_row = [
                            'id' => $rune->id,
                            'keystoneId' => $value->id,
                            'key' => $rune->key,
                            'icon' => $rune->icon,
                            'name' => $rune->name,
                            'shortDesc' => $rune->shortDesc,
                            'longDesc' => $rune->longDesc,
                        ];
                        array_push($runes_rows, $runes_row);
                    }
                }
            }
        }

        Keystone::insert($keystone_rows);
        Rune::insert($runes_rows);
    }
}
