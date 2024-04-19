<?php

namespace Lukascivil\Treewalker;

use Illuminate\Support\ServiceProvider;

class TreeWalkerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Package initialization logic goes here
    }

    public function register()
    {
        // Register the TreeWalker class as a singleton
        $this->app->singleton('treewalker', function ($app) {
            return new TreeWalker([]);
        });
    }
}