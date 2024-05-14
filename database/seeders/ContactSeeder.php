<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'social_name'=>'Instagram',
            'social_url'=>'#'
        ]);

        Contact::create([
            'social_name'=>'Twitter',
            'social_url'=>'#'
        ]);

        Contact::create([
            'social_name'=>'Linkedln',
            'social_url'=>'#'
        ]);
    }
}
