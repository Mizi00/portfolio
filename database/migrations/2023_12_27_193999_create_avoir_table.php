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
        Schema::create('avoir', function (Blueprint $table) {
            $table->unsignedBigInteger('idRealisation');
            $table->unsignedBigInteger('idSousComp');

            $table->foreign('idRealisation')->references('id')->on('realisations');
            $table->foreign('idSousComp')->references('id')->on('souscompetences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avoir');
    }
};
