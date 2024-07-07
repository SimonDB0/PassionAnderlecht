<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
protected $table = 'commentaires';

public function article()
{
return $this->belongsTo(Article::class, 'article_id');
}

public function auteur()
{
return $this->belongsTo(User::class, 'auteur_id');
}
}
