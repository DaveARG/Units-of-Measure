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
        Schema::create('units_of_measure', function (Blueprint $table) {
            $table->string('common_code')->primary();
            $table->string('name');
            $table->text('description');
            $table->string('level_and_category');
            $table->foreign('level_and_category')->references('level_and_category')->on('levels_and_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('level_and_category2')->nullable();
            $table->foreign('level_and_category2')->references('level_and_category')->on('levels_and_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('symbol');
            $table->string('conversion_factor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('units_of_measure');
    }
};
