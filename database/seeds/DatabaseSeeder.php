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
        $this->call(ChampionTableSeeder::class);

        $this->call(ItemTableSeeder::class);

        $this->call(MatchTableSeeder::class);

        $this->call(PlayerTableSeeder::class);

        $this->call(ParticipantTableSeeder::class);

        $this->call(StatsTableSeeder::class);
    }
}
