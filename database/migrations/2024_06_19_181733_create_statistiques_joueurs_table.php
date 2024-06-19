<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatistiquesJoueursTable extends Migration
{
    public function up()
    {
        Schema::create('statistiques_joueurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('joueur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->foreignId('match_id')->constrained('matchs')->onDelete('cascade');
            $table->integer('buts')->default(0);
            $table->integer('passes_decisives')->default(0);
            $table->integer('cartons_jaunes')->default(0);
            $table->integer('cartons_rouges')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('statistiques_joueurs');
    }
}