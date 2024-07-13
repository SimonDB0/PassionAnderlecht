<?php

namespace Database\Factories;

use App\Models\Galerie;
use Illuminate\Database\Eloquent\Factories\Factory;

class GalerieFactory extends Factory
{
    protected $model = Galerie::class;

    public function definition()
    {
        return [
            'url' => $this->faker->imageUrl(), // Exemple d'URL fictive pour une image
            'utilisateur_id' => \App\Models\User::factory(), // Créer un utilisateur fictif pour l'association
            'type' => $this->faker->randomElement(['photo', 'vidéo']), // Choisir aléatoirement entre photo et vidéo
        ];
    }
}
