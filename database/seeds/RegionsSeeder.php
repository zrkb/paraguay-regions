<?php

class RegionsSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		$this->seedfromJson('data/json/departments.json', 'departments');
		$this->seedfromJson('data/json/townships.json', 'townships');
	}
}
