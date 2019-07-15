<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Static database seeding
        $this->call(ChampionTableSeeder::class);
        $this->call(ItemTableSeeder::class);
    }
}
