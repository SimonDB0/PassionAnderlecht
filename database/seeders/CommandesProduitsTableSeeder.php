<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CommandeProduit;

class CommandesProduitsTableSeeder extends Seeder
{

    public function run()
    {
        CommandeProduit::factory()->count(100)->create();
    }
}
