<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    protected $model = Commande::class;

    public function definition()
    {
        return [
            'utilisateur_id' => \App\Models\User::factory(),
            'total' => $this->faker->randomFloat(2, 50, 500),
            'statut' => $this->faker->randomElement(['en_attente', 'traitement', 'expédiée', 'livrée', 'annulée']),
        ];
    }
}
