<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Experience::create([
            'job_start'=>'2022-7-05',
            'job_finish'=>'2022-9-03',
            'company_name'=>'Geniousoft',
            'job_description'=>'Staj',
        ]);
    }
}
