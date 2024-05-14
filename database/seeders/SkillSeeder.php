<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'skill_name'=>'HTML-CSS',
            'skill_percent'=>'90',
        ]);
        Skill::create([
            'skill_name'=>'JAVA',
            'skill_percent'=>'50',
        ]);
        Skill::create([
            'skill_name'=>'lARAVEL',
            'skill_percent'=>'60',
        ]);
        Skill::create([
            'skill_name'=>'C',
            'skill_percent'=>'50',
        ]);
    }
}
