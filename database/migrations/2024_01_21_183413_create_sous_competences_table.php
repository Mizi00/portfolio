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
        Schema::create('sous_competences', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->string('nom', 255);

            //clé etrangère
            $table->unsignedBigInteger('idCompetence');

        
            //relation avec les tables
            $table->foreign('idCompetence')->references('id')->on('competences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sous_competences');
    }
};
