<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->decimal('prix', 10, 2);
            $table->integer('stock');
            $table->string('image')->nullable();
            $table->enum('categorie', ['goodies', 'produits_officiels', 'abonnements']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('produits');
    }
}