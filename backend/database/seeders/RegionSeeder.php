<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region_arr = [
            ['name' => 'Highlands'],
            ['name' => 'Momase'],
            ['name' => 'New Guinea Islands'],
            ['name' => 'Southern']
        ];

        for ($i=0; $i < 4 ; $i++) {
            Region::insert(
                $region_arr[$i]
            );
        }
    }
}
