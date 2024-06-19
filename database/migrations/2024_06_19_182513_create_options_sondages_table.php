<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsSondagesTable extends Migration
{
    public function up()
    {
        Schema::create('options_sondages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sondage_id')->constrained('sondages')->onDelete('cascade');
            $table->string('option');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('options_sondages');
    }
}