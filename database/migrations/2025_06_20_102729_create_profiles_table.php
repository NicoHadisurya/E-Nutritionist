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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('name')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('email')->unique()->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('gender', ['male', 'female']);
            $table->float('height');
            $table->float('weight');
            $table->unsignedInteger('age');
            $table->float('bmi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
