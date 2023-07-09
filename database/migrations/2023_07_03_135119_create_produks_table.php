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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->enum('status', [0, 1])->default(FALSE);
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('cover')->nullable();
            $table->string('links')->nullable();
            $table->string('mk')->nullable();
            $table->string('md')->nullable();
            $table->text('desc');
            $table->integer('price');
            $table->integer('discount')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};