<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    protected $table = 'galerie';

    public function auteur()
    {
        return $this->belongsTo(User::class, 'auteur_id');
    }
}
