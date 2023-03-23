<?php

namespace LaravelShortcuts;

use Illuminate\Support\ServiceProvider;
use LaravelShortcuts\Commands\MakeCrudCommand;

class LaravelShortcutsServiceProvider extends ServiceProvider
{
    /**
     * Service Provider register method
     */
    public function register()
    {
        $this->commands([
            MakeCrudCommand::class
        ]);
    }

    /**
     * Service Provider boot actions
     */
    public function boot()
    {
        // Do nothing
    }
}