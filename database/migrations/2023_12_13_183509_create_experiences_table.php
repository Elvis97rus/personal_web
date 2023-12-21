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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('lang')->default('en');
            $table->longText('heading')->nullable();
            $table->longText('stack')->nullable();
            $table->longText('tasks')->nullable();
            $table->longText('skills')->nullable();
            $table->boolean('active')->default(false);
            $table->string('position')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
