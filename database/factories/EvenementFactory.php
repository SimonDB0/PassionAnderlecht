<?php

namespace Database\Factories;

use App\Models\Evenement;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvenementFactory extends Factory
{
    protected $model = Evenement::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date_evenement' => $this->faker->dateTimeThisYear(), // Génère une date aléatoire de cette année
            'lieu' => $this->faker->optional()->address, // Adresse aléatoire optionnelle
            'organisateur_id' => User::factory(), // Utilise le factory pour générer un ID utilisateur
        ];
    }
}
