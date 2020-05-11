<?php

namespace Paraguay\Regions;

use Illuminate\Support\ServiceProvider;

class RegionsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
        }
    }

    public function publishResources()
    {
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations')
        ], 'paraguay-regions-migrations');

        $this->publishes([
            __DIR__ . '/../database/seeds' => database_path('seeds')
        ], 'paraguay-regions-seeds');

        $this->publishes([
            __DIR__ . '/../database/data' => database_path('data')
        ], 'paraguay-regions-data');
    }
}