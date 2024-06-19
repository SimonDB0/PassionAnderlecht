<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponsesSondagesTable extends Migration
{
    public function up()
    {
        Schema::create('reponses_sondages', function (Blueprint $table) {
            $table->foreignId('sondage_id')->constrained('sondages')->onDelete('cascade');
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade');
            $table->foreignId('option_id')->constrained('options_sondages')->onDelete('cascade');
            $table->primary(['sondage_id', 'utilisateur_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('reponses_sondages');
    }
}