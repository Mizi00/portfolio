<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('souscompetences', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 50);

            $table->unsignedBigInteger('idCompetence')->nullable();

            $table->foreign('idCompetence')->references('id')->on('competences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('souscompetences');
    }
};
