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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable();
            $table->longText('answer')->nullable();
            $table->unsignedInteger('position')->nullable();
            $table->string('lang')->nullable();
            $table->boolean('active')->default(true);
//            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreignId('category')->nullable()->constrained("categories")->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
