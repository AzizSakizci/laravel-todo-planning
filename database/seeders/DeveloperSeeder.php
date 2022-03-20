<?php

namespace Database\Seeders;

use App\Models\Developer;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev1 = Developer::create(
            [
                'name' => 'Dev1',
                'capacity' => '1'
            ]
        );

        $dev2 = Developer::create(
            [
                'name' => 'Dev2',
                'capacity' => '2'
            ]
        );

        $dev3 = Developer::create(
            [
                'name' => 'Dev3',
                'capacity' => '3'
            ]
        );

        $dev4 = Developer::create(
            [
                'name' => 'Dev4',
                'capacity' => '4'
            ]
        );

        $dev5 = Developer::create(
            [
                'name' => 'Dev5',
                'capacity' => '5'
            ]
        );

    }
}
