<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HallsTableSeeder::class);
        $this->call( CategoriesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(EventTypesTableSeeder::class);
        $this->call(HallTypesTableSeeder::class);

    }
}
