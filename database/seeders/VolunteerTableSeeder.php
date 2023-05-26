<?php

namespace Database\Seeders;

use Database\Factories\VolunteerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Volunteer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class VolunteerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Volunteer::factory()->count(30)->create();
    }
}
