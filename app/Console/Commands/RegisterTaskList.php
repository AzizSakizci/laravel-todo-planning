<?php

namespace App\Console\Commands;

use App\Adapters\ProviderOneAdapter;
use App\Adapters\ProviderTwoAdapter;
use App\Models\Task;
use App\Strategy\TaskList;
use Illuminate\Console\Command;

class RegisterTaskList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:register-task-list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Saving external data to database';

    const PROVIDER_LIST = [
        ProviderOneAdapter::class,
        ProviderTwoAdapter::class
    ];

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
    public function handle(): int
    {
        $list = [];
        foreach (self::PROVIDER_LIST as $provider) {
            $list = array_merge($list, (new TaskList(new $provider))->getAll());
        }

        foreach ($list as $issue) {

            Task::insert([
                "name" => $issue['name'],
                "timing" => $issue['timing'],
                "degree_of_difficulty" => $issue['difficulty']
            ]);
            }

        return 0;
    }
}
