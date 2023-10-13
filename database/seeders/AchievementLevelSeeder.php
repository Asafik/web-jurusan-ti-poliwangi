<?php

namespace Database\Seeders;

use App\Models\AchievementLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AchievementLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AchievementLevel::insert([
            ['name' => 'Kecamatan'],
            ['name' => 'Kabupaten'],
            ['name' => 'Provinsi'],
            ['name' => 'Nasional'],
            ['name' => 'Internasional'],
        ]);
    }
}
