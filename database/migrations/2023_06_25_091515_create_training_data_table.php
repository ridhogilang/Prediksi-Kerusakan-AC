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
        Schema::create('training_data', function (Blueprint $table) {
            $table->id();
            $table->boolean('G1');
            $table->boolean('G2');
            $table->boolean('G3');
            $table->boolean('G4');
            $table->boolean('G5');
            $table->boolean('G6');
            $table->boolean('G7');
            $table->boolean('G8');
            $table->boolean('G9');
            $table->boolean('G10');
            $table->boolean('G11');
            $table->boolean('G12');
            $table->boolean('G13');
            $table->boolean('G14');
            $table->boolean('G15');
            $table->string('label');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_data');
    }
};
