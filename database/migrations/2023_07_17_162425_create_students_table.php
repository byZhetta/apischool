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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('dni')->unique();
            $table->string('name');
            $table->string('address');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->foreignId('career_id')
            ->constrained('carrers')
            ->onUpdate('cascade')->onDelete('restrict');
            $table->enum('removed',['true','false'])->default('false');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
