<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Popular Venue'
            ],
            [
                'name' => 'Cheapest Price'
            ],
            [
                'name' => 'Popular Location'
            ],
            [
                'name' => 'Featured Venue'
            ]
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
