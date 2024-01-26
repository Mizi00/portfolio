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
        Schema::create('avoirs', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();

            //clé étrangère
            $table->unsignedBigInteger('idCompetence');
            $table->unsignedBigInteger('idRealisation');

            //relation avec les tables
            $table->foreign('idCompetence')->references('id')->on('competences');
            $table->foreign('idRealisation')->references('id')->on('realisations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avoirs');
    }
};
