<?php

use Illuminate\Database\Seeder;
use App\Hall;
use Carbon\Carbon;
class HallsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $halls = [
            [
               'name' => 'Stargen International Hotel Open Hall',
               'location' => 'Okokomaiko',
               'capacity' => '800',
               'halltype' => 'Hotel with event hall ',
               'eventtype' => 'Outdoor Event',
               'amenities' => 'Air Conditioner, Security, Water, Toilet, Chairs',
               'description' => 'This is good multipurpose hall that serves you better',
               'price' => '450000',
               'address' => 'No 14, Golden Estate, Park View, Okokomaiko',
               'image' => 'stargen.jpg',
               'vendor' => 'Oloto',
               'created_at' => Carbon::now()->toDateTimeString(),
            ],

            [
                'name' => 'Rannel Holiday Resort Hall',
                'location' => 'Okokomaiko',
                'capacity' => '120',
                'halltype' => 'Multipurpose Hall',
                'eventtype' => 'Wedding Reception',
                'amenities' => 'Air Conditioner, Security, Water, Toilet, Chairs',
                'description' => 'This is good multipurpose hall that serves you better',
                'price' => '100000',
                'address' => 'No 14, Golden Estate, Park View, Ojo',
                'image' => 'rannel.jpg',
                'vendor' => 'Oloto',
                'created_at' => Carbon::now()->toDateTimeString(),
             ],

            [
                'name' => 'Freeborn Hotel Hall',
                'location' => 'Lagos-Badagry Expressway',
                'capacity' => '250',
                'halltype' => 'Outdoor Hall',
                'eventtype' => 'Outdoor Event',
                'amenities' => 'Air Conditioner, Security, Water, Toilet, Chairs',
                'description' => 'This is good multipurpose hall that serves you better',
                'price' => '200000',
                'address' => 'No 14, Golden Estate, Epe',
                'image' => 'freeborn.jpg',
                'vendor' => 'Oloto',
                'created_at' => Carbon::now()->toDateTimeString(),
             ],

             [
                'name' => 'Golden Event Centre',
                'location' => 'Lekki',
                'capacity' => '300',
                'halltype' => 'Multipurpose Hall',
                'eventtype' => 'Wedding Reception',
                'amenities' => 'Air Conditioner, Security, Water, Toilet, Chairs',
                'description' => 'This is good multipurpose hall that serves you better',
                'price' => '500000',
                'address' => 'No 14, Amen Estate, Lekki Phase II',
                'image' => 'freeborn2.jpg',
                'vendor' => 'Oloto',
                'created_at' => Carbon::now()->toDateTimeString(),
             ],

             [
                'name' => 'Success Event Centre',
                'location' => 'Ojo',
                'capacity' => '150',
                'halltype' => 'Multipurpose Hall',
                'eventtype' => 'Wedding Reception',
                'amenities' => 'Air Conditioner, Security, Water, Toilet, Chairs',
                'description' => 'This is good multipurpose hall that serves you better',
                'price' => '90000',
                'address' => 'No 14, Adewale Street, Franklass, Ojo',
                'image' => 'damilare.jpg',
                'vendor' => 'damilare anjorin',
                'created_at' => Carbon::now()->toDateTimeString(),
             ],

            ];

            foreach ($halls as $hall)
            {
              Hall::create($hall);
            }
    }
}
