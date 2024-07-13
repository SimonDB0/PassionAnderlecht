<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matchs;

class MatchsTableSeeder extends Seeder
{
    public function run()
    {
        Matchs::factory()->count(50)->create();
    }
}
