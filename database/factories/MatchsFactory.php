<?php

namespace Database\Factories;


use App\Models\Matchs;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatchsFactory extends Factory
{
    protected $model = Matchs::class;

    public function definition()
    {
        return [
            'date' => $this->faker->dateTimeThisYear(), // Génère une date aléatoire de cette année
            'equipe_adverse' => $this->faker->name,
            'domicile' => $this->faker->boolean,
            'resultat' => $this->faker->randomElement(['Victoire', 'Défaite', 'Match nul', null]),
            'score_local' => $this->faker->numberBetween(0, 5), // Génère un score local entre 0 et 5
            'score_adverse' => $this->faker->numberBetween(0, 5), // Génère un score adverse entre 0 et 5
        ];
    }
}
