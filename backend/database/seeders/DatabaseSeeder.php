<?php

namespace Database\Seeders;

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
        // Note: Seeding in this order is crucial as the db is protected by foreign key constraints.
        $this->call(RegionSeeder::class);
        $this->call(ProvinceSeeder::class);
        $this->call(ElectorateSeeder::class);
        $this->call(MembershipTypeSeeder::class);
        $this->call(MemberSeeder::class);
    }
}
