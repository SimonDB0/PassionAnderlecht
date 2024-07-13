<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'image',
        'auteur_id',
    ];

    /**
     * Relations
     */

    public function auteur()
    {
        return $this->belongsTo(User::class, 'auteur_id');
    }
}
