<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class storageLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:storage-link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a sym link';

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
     * @return int
     */
    public function handle()
    {
        Artisan::call("storage:link");
    }
}
