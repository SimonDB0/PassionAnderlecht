<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commande;

class CommandesTableSeeder extends Seeder
{
    public function run()
    {
        Commande::factory()->count(50)->create();
    }
}
