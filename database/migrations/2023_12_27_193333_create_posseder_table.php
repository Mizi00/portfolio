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
        Schema::create('posseder', function (Blueprint $table) {
            $table->unsignedBigInteger('idRealisation');
            $table->unsignedBigInteger('idCompetence');

            $table->foreign('idRealisation')->references('id')->on('realisations');
            $table->foreign('idCompetence')->references('id')->on('competences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posseder');
    }
};
