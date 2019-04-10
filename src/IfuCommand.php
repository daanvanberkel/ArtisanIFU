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
    protected $signature = 'ifu';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'I Fucked Up (dump autoload, migrate a fresh database and run database seeds)';

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
        exec('composer dumpautoload');
        $this->call('migrate:fresh');
        $this->call('db:seed');
        $this->info('Your database is fresh again 😀');
    }
}
