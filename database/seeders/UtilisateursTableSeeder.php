<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UtilisateursTableSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(50)->create();
    }
}
