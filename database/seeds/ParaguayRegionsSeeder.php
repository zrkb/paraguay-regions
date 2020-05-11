<?php

class ParaguayRegionsSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedfromJson('data/json/departments.json', 'departments');
        $this->seedfromJson('data/json/cities.json', 'cities');
    }
}
