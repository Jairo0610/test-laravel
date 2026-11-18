<?php

namespace Database\Seeders;

use App\Models\carrera_model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class carreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        carrera_model::factory(20)->create();
    }
}
