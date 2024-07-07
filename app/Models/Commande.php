<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commandes';

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'commandes_produits', 'commande_id', 'produit_id');
    }
}
