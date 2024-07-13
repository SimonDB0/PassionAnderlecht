<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'utilisateur_id',
        'date_commande',
        'statut',
        'montant_total',
    ];

    /**
     * Relations
     */

    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'utilisateur_id');
    }

    public function produits()
    {
        return $this->hasMany(CommandeProduit::class, 'commande_id');
    }
}
