<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GItUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:pull origin {branch: The remote branch git needs to pull from}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is used to pull the specified branch from the GitHub origin';

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
        //
    }
}
