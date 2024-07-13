<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UtilisateursTableSeeder::class,
            ArticlesTableSeeder::class,
            ProduitsTableSeeder::class,
            CommandesTableSeeder::class,
            MatchsTableSeeder::class,
            EvenementsTableSeeder::class,
            ParticipationsEvenementsTableSeeder::class,
            GalerieTableSeeder::class,
        ]);
    }
}
