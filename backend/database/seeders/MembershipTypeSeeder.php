<?php

namespace Database\Seeders;

use App\Models\MembershipType;
use Illuminate\Database\Seeder;

class MembershipTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $memberType = [
            ['membership_type' => 'Political'],
            ['membership_type' => 'Financial'],
            ['membership_type' => 'Non-Financial']
        ];

        for ($i=0; $i < 3; $i++) {
            MembershipType::insert(
                $memberType[$i]
            );
        }
    }
}
