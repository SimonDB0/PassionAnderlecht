<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galerie;

class GalerieTableSeeder extends Seeder
{
    public function run()
    {
        Galerie::factory()->count(50)->create();
    }
}
