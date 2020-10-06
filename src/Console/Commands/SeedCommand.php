<?php

namespace Paraguay\Regions\Console\Commands;

use Paraguay\Regions\Models\City;
use Paraguay\Regions\Models\Department;
use Illuminate\Console\Command;
use Paraguay\Regions\Models\Neighborhood;

class SeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'paraguay-regions:seed {--refresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed paraguay regions data';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->comment(PHP_EOL . 'Paraguay Regions seed started' . PHP_EOL);

        $this->line('→ Seeding departments ... <info>✔</info>');
        $this->seedDepartments();

        $this->line('→ Seeding cities ... <info>✔</info>');
        $this->seedCities();

        $this->line('→ Seeding neighborhoods ... <info>✔</info>');
        $this->seedNeighborhoods();

        $this->info(PHP_EOL . 'Done.');
    }

    public function seedDepartments()
    {
        $jsonString = file_get_contents(database_path('data/json/departments.json'));
        $json = json_decode($jsonString, true);

        Department::insert($json);
    }

    public function seedCities()
    {
        $jsonString = file_get_contents(database_path('data/json/cities.json'));
        $json = json_decode($jsonString, true);

        City::insert($json);
    }

    public function seedNeighborhoods()
    {
        $jsonString = file_get_contents(database_path('data/json/neighborhoods.json'));
        $json = json_decode($jsonString, true);

        Neighborhood::insert($json);
    }
}
