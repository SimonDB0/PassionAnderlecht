<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->decimal('total', 10, 2);
            $table->enum('statut', ['en_attente', 'traitement', 'expédiée', 'livrée', 'annulée'])->default('en_attente');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}