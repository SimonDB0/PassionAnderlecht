<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commandes_produits', 'produit_id', 'commande_id');
    }
}
