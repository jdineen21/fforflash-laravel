<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateMatchTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:fresh:match';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations for match database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('migrate:fresh',
            ['--database' => 'match'],
            ['--path' => 'database/migrations/match']
        );
    }
}
