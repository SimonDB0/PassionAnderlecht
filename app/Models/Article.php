<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    public function auteur()
    {
        return $this->belongsTo(User::class, 'auteur_id');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'article_id');
    }
}
