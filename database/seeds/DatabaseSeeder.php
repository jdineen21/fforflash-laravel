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
        
        // Match database seeding
        $this->call(MatchTableSeeder::class);
        $this->call(PlayerTableSeeder::class);
        $this->call(ParticipantTableSeeder::class);
        $this->call(StatsTableSeeder::class);
    }
}
