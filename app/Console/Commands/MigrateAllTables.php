<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateAllTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:fresh:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations for all databases';

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
        $this->call('migrate:fresh', ['--database' => 'static']);
        $this->call('migrate', ['--path' => 'database/migrations/static']);
        
        $this->call('migrate:fresh', ['--database' => 'match']);
        $this->call('migrate', ['--path' => 'database/migrations/match']);

        $this->call('db:seed');
    }
}
