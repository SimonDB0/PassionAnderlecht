<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchsTable extends Migration
{
    public function up()
    {
        Schema::create('matchs', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->string('equipe_adverse');
            $table->boolean('domicile');
            $table->string('resultat')->nullable();
            $table->integer('score_local')->nullable();
            $table->integer('score_adverse')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('matchs');
    }
}
