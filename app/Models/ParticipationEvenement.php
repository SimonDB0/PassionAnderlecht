<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParticipationEvenement extends Model
{
    protected $table = 'participation_evenements';

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }
}
