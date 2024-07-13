<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'description',
        'date',
    ];

    /**
     * Relations
     */
    public function participants()
    {
        return $this->hasMany(ParticipationEvenement::class, 'evenement_id');
    }
}
