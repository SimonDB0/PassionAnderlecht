<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    protected $table = 'matchs';

    public function statistiquesJoueurs()
    {
        return $this->hasMany(StatistiqueJoueur::class, 'match_id');
    }
}
