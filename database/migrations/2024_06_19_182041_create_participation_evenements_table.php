<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipationEvenementsTable extends Migration
{
    public function up()
    {
        Schema::create('participation_evenements', function (Blueprint $table) {
            $table->foreignId('evenement_id')->constrained('evenements')->onDelete('cascade');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->boolean('participation')->default(false);
            $table->primary(['evenement_id', 'utilisateur_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('participation_evenements');
    }
}
