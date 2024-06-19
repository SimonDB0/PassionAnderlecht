<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvenementsTable extends Migration
{
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->dateTime('date_evenement');
            $table->string('lieu')->nullable();
            $table->foreignId('organisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('evenements');
    }
}