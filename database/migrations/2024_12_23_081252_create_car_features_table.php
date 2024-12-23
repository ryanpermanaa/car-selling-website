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
        Schema::create('car_features', function (Blueprint $table) {
            $table->unsignedBigInteger('car_id')->primary();
            $table->boolean('calm')->default(0);
            $table->boolean('playful')->default(0);
            $table->boolean('talkative')->default(0);
            $table->boolean('kids_friendly')->default(0);
            $table->boolean('dogs_friendly')->default(0);
            $table->boolean('litterbox_trained')->default(0);
            $table->boolean('vaccine')->default(0);
            $table->boolean('indoor')->default(0);
            $table->boolean('outdoor')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features');
    }
};
