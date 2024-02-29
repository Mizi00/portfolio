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
        Schema::create('detenirs', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();

            $table->unsignedBigInteger('idRealisation');
            $table->unsignedBigInteger('idSousCompetence');

            $table->foreign('idRealisation')->references('id')->on('realisations');
            $table->foreign('idSousCompetence')->references('id')->on('sous_competences');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detenirs');
    }
};
