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
            $this->registerCommands();
        }
    }

    public function publishResources()
    {
        if (! class_exists('CreateParaguayRegionsTables')) {
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__.'/../database/migrations/create_paraguay_regions_tables.php' => database_path("/migrations/{$timestamp}_create_paraguay_regions_tables.php"),
            ], 'paraguay-regions-migrations');
        }

        $this->publishes([
            __DIR__ . '/../database/data' => database_path('data')
        ], 'paraguay-regions-data');
    }

    public function registerCommands()
    {
        $this->commands([
            Console\Commands\SeedCommand::class,
        ]);
    }
}