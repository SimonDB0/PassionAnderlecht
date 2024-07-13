<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatistiqueJoueur extends Model
{
    use HasFactory;

    protected $table = 'statistiques_joueurs';

    protected $fillable = [
        'joueur_id',
        'but',
        'passe_decisive',
        'match_joue',
        'temps_joue',
    ];

    /**
     * Relations
     */

    public function joueur()
    {
        return $this->belongsTo(Joueur::class, 'joueur_id');
    }
}
