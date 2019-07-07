<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FreshAllTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fresh:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate Fresh Databases';

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
        $this->info('This will drop all databases');
        if ($this->confirm('Do you wish to continue?')) 
        {
            $this->call('migrate:fresh', ['--database' => 'content']);
            $this->call('migrate:fresh', ['--database' => 'static']);

            $this->call('migrate', ['--path' => 'database/migrations/content']);
            $this->call('migrate', ['--path' => 'database/migrations/static']);
        }
    }
}
