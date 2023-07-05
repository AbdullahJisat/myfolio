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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('degree', 100)->nullable();
            $table->string('institute', 100)->nullable();
            $table->string('start_date', 100)->nullable();
            $table->string('end_date', 100)->nullable();
            $table->integer('till')->default(0)->comment('1-till/0-not');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
