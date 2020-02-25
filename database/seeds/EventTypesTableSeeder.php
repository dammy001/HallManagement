<?php

use Illuminate\Database\Seeder;
use App\EventType;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventtypes = [
            [
                'eventtype' => 'Wedding Reception',
                'category' => 'Popular',
                'image' => 'homehall2.png'
            ],
            [
                'eventtype' => 'Meeting',
                'category' => 'Moderate',
                'image' => 'homehall3.jpg'
            ],
            [
                'eventtype' => 'Conference',
                'category' => 'Popular',
                'image' => 'conference-hall1.jpg'

            ],
            [
                'eventtype' => 'Product Launch',
                'category' => 'Low',
                'image' => ''
            ],
            [
                'eventtype' => 'Corporate Party',
                'category' => 'Low',
                'image' => ''
            ],
            [
                'eventtype' => 'Engagement',
                'category' => 'Low',
                'image' => ''
            ],
            [
                'eventtype' => 'Training',
                'category' => 'Low',
                'image' => ''
            ],
            [
                'eventtype' => 'Get Together',
                'category' => 'Low',
                'image' => ''
            ],
            [
                'eventtype' => 'Outdoor Event',
                'category' => 'Popular',
                'image' => 'stargen.jpg'
            ],
        ];

        foreach($eventtypes as $event){
            EventType::create($event);
        }
    }
}
