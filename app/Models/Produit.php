<?php




namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';

    protected $fillable = [
        'nom',
        'description',
        'prix',
        'stock',
    ];

    /**
     * Relations
     */

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'commandes_produits', 'produit_id', 'commande_id');
    }
}
