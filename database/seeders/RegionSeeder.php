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
        if (Region::count() == 0) {
            Region::create([
                'name' => 'Canada'
            ]);
            Region::create([
                'name' => 'Australia'
            ]);
            Region::create([
                'name' => 'United States (US)'
            ]);
            Region::create([
                'name' => 'United Kingdom (UK)'
            ]);
        }
    }
}
