<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evenement;

class EvenementsTableSeeder extends Seeder
{
    public function run()
    {
        Evenement::factory()->count(20)->create();
    }
}
