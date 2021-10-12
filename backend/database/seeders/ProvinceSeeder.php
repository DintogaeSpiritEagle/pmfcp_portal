<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $province_arr = [
            ['name' => 'Bougainville', 'capital' => 'Buka', 'region_id' => 3, 'lat' => '', 'lng' => ''],
            ['name' => 'Central', 'capital' => 'Port Moresby', 'region_id' => 4, 'lat' => '', 'lng' => ''],
            ['name' => 'Chimbu', 'capital' => 'Kundiawa', 'region_id' => 1, 'lat' => '', 'lng' => ''],
            ['name' => 'East New Britain', 'capital' => 'Rabaul', 'region_id' => 3, 'lat' => '', 'lng' => ''],
            ['name' => 'East Sepik', 'capital' => 'Wewak', 'region_id' => 2, 'lat' => '', 'lng' => ''],
            ['name' => 'Eastern Highlands', 'capital' => 'Goroka', 'region_id' => 1, 'lat' => '', 'lng' => ''],
            ['name' => 'Enga', 'capital' => 'Wabag', 'region_id' => 1, 'lat' => '', 'lng' => ''],
            ['name' => 'Gulf', 'capital' => 'Kerema', 'region_id' => 4, 'lat' => '', 'lng' => ''],
            ['name' => 'Hela', 'capital' => 'Tari', 'region_id' => 1, 'lat' => '', 'lng' => ''],
            ['name' => 'Jiwaka', 'capital' => 'Kurumul', 'region_id' => 1, 'lat' => '', 'lng' => ''],
            ['name' => 'Madang', 'capital' => 'Madang', 'region_id' => 2, 'lat' => '', 'lng' => ''],
            ['name' => 'Manus', 'capital' => 'Lorengau', 'region_id' => 3, 'lat' => '', 'lng' => ''],
            ['name' => 'Milne Bay', 'capital' => 'Alotau', 'region_id' => 4, 'lat' => '', 'lng' => ''],
            ['name' => 'Morobe', 'capital' => 'Lae', 'region_id' => 2, 'lat' => '', 'lng' => ''],
            ['name' => 'National Capital District', 'capital' => 'Port Moresby', 'region_id' => 4, 'lat' => '', 'lng' => ''],
            ['name' => 'New Ireland', 'capital' => 'Kavieng', 'region_id' => 3, 'lat' => '', 'lng' => ''],
            ['name' => 'Oro', 'capital' => 'Popondetta', 'region_id' => 4, 'lat' => '', 'lng' => ''],
            ['name' => 'Southern Highlands', 'capital' => 'Mendi', 'region_id' => 1, 'lat' => '', 'lng' => ''],
            ['name' => 'West New Britain', 'capital' => 'Kimbe', 'region_id' => 3, 'lat' => '', 'lng' => ''],
            ['name' => 'West Sepik', 'capital' => 'Vanimo', 'region_id' => 2, 'lat' => '', 'lng' => ''],
            ['name' => 'Western', 'capital' => 'Daru', 'region_id' => 4, 'lat' => '', 'lng' => ''],
            ['name' => 'Western Highlands', 'capital' => 'Mt Hagen', 'region_id' => 1, 'lat' => '', 'lng' => ''],
        ];

        for ($i = 0; $i < 22; $i++) {
            Province::insert(
                $province_arr[$i]
            );
        }
    }
}
