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
        Schema::create('commands', function (Blueprint $table) {
            $table->id();$table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('shoe_id')->constrained()->onDelete('cascade');
            $table->integer('quantity');
            $table->string('size');
            $table->float('price');
            // Add any additional columns as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commands');
    }
};
