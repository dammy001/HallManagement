<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            [
                'location' => 'Lasu/Badagry Expressway',
                'category' => 'High'
            ],
            [
                'location' => 'Lasu/Iyana-Iba Road',
                'category' => 'High'
            ],
            [
                'location' => 'Alaba Narket',
                'category' => 'High'
            ],
            [
                'location' => 'Ojo Town',
                'category' => 'High'
            ],
            [
                'location' => 'Iba Town',
                'category' => 'Moderate'
            ],
            [
                'location' => 'Igbo-Elerin',
                'category' => 'Moderate'
            ],
            [
                'location' => 'Ijanikin',
                'category' => 'Moderate'
            ],
            [
                'location' => 'Ajangbadi',
                'category' => 'Moderate'
            ],
            [
                'location' => 'Igbede',
                'category' => 'Moderate'
            ],
            [
                'location' => 'Okokomaiko',
                'category' => 'Low'
            ],
            [
                'location' => 'Abule Ade',
                'category' => 'Low'
            ],
            [
                'location' => 'Ikare',
                'category' => 'Low'
            ],
            [
                'location' => 'Omomo Meta',
                'category' => 'Low'
            ],

        ];

        foreach($locations as $location){
            Location::create($location);
        }
    }
}
