<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesProduitsTable extends Migration
{
    public function up()
    {
        Schema::create('commandes_produits', function (Blueprint $table) {
            $table->foreignId('commande_id')->constrained('commandes')->onDelete('cascade');
            $table->foreignId('produit_id')->constrained('produits')->onDelete('cascade');
            $table->integer('quantite');
            $table->decimal('prix', 10, 2);
            $table->primary(['commande_id', 'produit_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('commandes_produits');
    }
}