<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->text('question');           // Soal
            $table->string('option_a');         // Pilihan A
            $table->string('option_b');         // Pilihan B
            $table->string('option_c');         // Pilihan C
            $table->string('option_d');         // Pilihan D
            $table->char('correct_answer', 1);  // Jawaban Benar (a,b,c, atau d)
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};