<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSondagesTable extends Migration
{
    public function up()
    {
        Schema::create('sondages', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->foreignId('auteur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sondages');
    }
}