<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FreshMatchTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fresh:match';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Fresh Match Database';

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
        $this->info('This will drop database "match"');
        if ($this->confirm('Do you wish to continue?')) 
        {
            $this->call('migrate:fresh', ['--database' => 'match']);
            $this->call('migrate', ['--path' => 'database/migrations/match']);
        }
    }
}
