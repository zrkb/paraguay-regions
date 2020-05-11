<?php

use Illuminate\Database\Seeder;

abstract class BaseSeeder extends Seeder
{
    public function seedFromJson($jsonFilePath, $tableName, $closure = null)
    {
        $jsonData = File::get(database_path($jsonFilePath));
        $data = (json_decode($jsonData, true));

        if ($closure) {
            $data = array_map(function($key, $item) use ($closure) {
                return $closure($item);
            }, array_keys($object), $object);
        }

        $data = array_map(function($key, $item) use ($tableName) {
            return $item;
        }, array_keys($data), $data);

        DB::table($tableName)->insert($data);

        $this->command->line(sprintf('<info>Table (%s):</info> %d rows affected', $tableName, count($data)));
    }
}
