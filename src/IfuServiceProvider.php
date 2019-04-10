<?php

namespace Daanvanberkel\Ifu;

use Illuminate\Support\ServiceProvider;

class IfuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                IfuCommand::class
            ]);
        }
    }
}
