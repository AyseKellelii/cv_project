<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'school_start'=>'2021-9-01',
            'school_finish'=>'2025-7-01',
            'school_name'=>'Fırat Üniversitesi',
            'degree'=>'Lisans',
            'school_description'=>'1975 yılında kurulmuştur.'
        ]);
    }
}
