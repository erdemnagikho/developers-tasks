<?php

namespace App\Console\Commands;

use App\Factory\GlobalService;
use App\Factory\Mocky1;
use App\Factory\Mocky2;
use App\Factory\MockyFactory;
use Illuminate\Console\Command;

class AssignTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assign:tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $mockyFactory = new MockyFactory();
        $mockyFactory->runMockies([
            new Mocky1(),
            new Mocky2(),
        ]);

        GlobalService::insertDevelopers();
        GlobalService::assignTaskToDeveloper();

        return 0;
    }
}
