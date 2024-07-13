<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipe_locale',
        'equipe_visiteur',
        'score_local',
        'score_visiteur',
        'date_match',
    ];

    /**
     * Relations
     */

    public function statistiques()
    {
        return $this->hasMany(StatistiqueJoueur::class, 'match_id');
    }
}
