<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateStaticTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:fresh:static';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations for static database';

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
            ['--database' => 'static']
        );
        $this->call('migrate',
            ['--path' => 'database/migrations/static']
        );
    }
}