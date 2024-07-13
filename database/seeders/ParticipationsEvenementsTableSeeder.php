<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ParticipationEvenement;

class ParticipationsEvenementsTableSeeder extends Seeder
{
    public function run()
    {
        ParticipationEvenement::factory()->count(100)->create();
    }
}
