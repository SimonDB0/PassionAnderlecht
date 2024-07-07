<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatistiqueJoueur extends Model
{
    protected $table = 'statistiques_joueurs';

    public function match()
    {
        return $this->belongsTo(Matchs::class, 'match_id');
    }
}
