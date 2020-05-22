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
        if (! class_exists('CreateDepartmentsTable') || ! class_exists('CreateCitiesTable')) {
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__.'/../database/migrations/create_departments_table.php' => database_path("/migrations/{$timestamp}_create_departments_table.php"),
                __DIR__.'/../database/migrations/create_cities_table.php' => database_path("/migrations/{$timestamp}_create_cities_table.php"),
            ], 'paraguay-regions-migrations');
        }

        $this->publishes([
            __DIR__ . '/../database/seeds' => database_path('seeds')
        ], 'paraguay-regions-seeds');

        $this->publishes([
            __DIR__ . '/../database/data' => database_path('data')
        ], 'paraguay-regions-data');
    }
}