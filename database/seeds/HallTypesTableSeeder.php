<?php

use Illuminate\Database\Seeder;
use App\HallType;

class HallTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $halltypes = [
            [
                'halltype' => 'Auditorium'
            ],
            [
                'halltype' => 'Boardroom'
            ],
            [
                'halltype' => 'Civic Center'
            ],
            [
                'halltype' => 'Club Hall'
            ],
            [
                'halltype' => 'Conference Center'
            ],
            [
                'halltype' => 'Hotel with event hall'
            ],
            [
                'halltype' => 'Meeting Room'
            ],
            [
                'halltype' => 'Multipurpose Hall'
            ],
            [
                'halltype' => 'Outdoor Hall'
            ],
        ];

        foreach($halltypes as $halltype){
            HallType::create($halltype);
        }
    }
}
