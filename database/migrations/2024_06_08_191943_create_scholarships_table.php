<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('scholarships', function (Blueprint $table) {
            $table->comment('Becas');
            $table->id();
            $table->foreignId('scholarship_type_id')->constrained()->comment('ID del tipo de beca');
            $table->foreignId('student_id')->constrained()->comment('ID del estudiante');
            $table->integer('semester')->comment('Semestre');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
