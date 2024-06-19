<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('article_id')->constrained('articles')->onDelete('cascade');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->text('contenu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}