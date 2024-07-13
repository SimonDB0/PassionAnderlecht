<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentaireFactory extends Factory
{
    protected $model = Commentaire::class;

    public function definition() : array
    {
        return [
            'contenu' => $this->faker->paragraph,
            'auteur_id' => User::factory(),
            'article_id' => Article::factory(),
        ];
    }
}
