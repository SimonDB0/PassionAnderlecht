<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipationEvenement extends Model
{
    use HasFactory;

    protected $table = 'participation_evenements';

    protected $fillable = [
        'utilisateur_id',
        'evenement_id',
        'role',
    ];

    /**
     * Relations
     */

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'evenement_id');
    }
}
