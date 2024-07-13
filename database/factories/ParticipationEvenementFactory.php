<?php

namespace Database\Factories;

use App\Models\ParticipationEvenement;
use Illuminate\Database\Eloquent\Factories\Factory;

class ParticipationEvenementFactory extends Factory
{
    protected $model = ParticipationEvenement::class;

    public function definition()
    {
        return [
            'utilisateur_id' => \App\Models\User::factory(),
            'evenement_id' => \App\Models\Evenement::factory(),
            'participation'=>$this->faker->boolean(60)
        ];
    }
}
