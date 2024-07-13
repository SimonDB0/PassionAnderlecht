<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;

class ProduitsTableSeeder extends Seeder
{
    public function run()
    {
        Produit::factory()->count(50)->create();
    }
}
