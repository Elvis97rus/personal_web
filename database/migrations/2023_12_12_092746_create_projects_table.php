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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500)->index();
            $table->string('lang')->default('en');
            $table->string('link', 500)->nullable();
            $table->boolean('active')->default(true)->index();
            $table->longText('content')->nullable();
            $table->unsignedInteger('position')->nullable();
            $table->string('file', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
