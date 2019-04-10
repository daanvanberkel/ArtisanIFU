<?php

namespace Daanvanberkel\Ifu;

use Illuminate\Console\Command;

class IfuCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ifu {--a|all : Run all options}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'I Fucked Up (dump autoload, clear laravel cache, migrate a fresh database and run database seeds)';

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
        $possibleActions = [
            'dump autoload',
            'clear laravel cache',
            'migrate fresh database',
            'seed database'
        ];

        if ($this->option('all')) {
            $actions = $possibleActions;
        } else {
            $actions = $this->choice('Which actions do you want to preform?', $possibleActions, '0,1,2,3', 1, true);
        }

        if (in_array('dump autoload', $actions)) {
            exec('composer dumpautoload');
        }

        if (in_array('clear laravel cache', $actions)) {
            $this->call('optimize:clear');
        }

        if (in_array('migrate fresh database', $actions)) {
            $this->call('migrate:fresh');
        }

        if (in_array('seed database', $actions)) {
            $this->call('db:seed');
        }

        $this->info('Your laravel instance is fresh again 😀. Good luck!');
    }
}
