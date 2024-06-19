<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalerieTable extends Migration
{
    public function up()
    {
        Schema::create('galerie', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->string('type')->default('photo'); // photo ou vidéo
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galerie');
    }
}