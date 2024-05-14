<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'name'=>'Ayşe Kelleli',
            'phone_number'=>'543-545-33-19',
            'e_mail'=>'ayseekelleli@gmail.com',
            'address'=>'Mersin'

        ]);
    }
}
