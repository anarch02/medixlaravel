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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->integer('years_in_market');
            $table->text('paragraph_ru')->nullable();
            $table->text('paragraph_uz')->nullable();
            $table->text('paragraph_en')->nullable();
            $table->string('indicator1_name_ru')->nullable();
            $table->string('indicator1_name_uz')->nullable();
            $table->string('indicator1_name_en')->nullable();
            $table->string('indicator1_value')->nullable();
            $table->string('indicator2_name_ru')->nullable();
            $table->string('indicator2_name_uz')->nullable();
            $table->string('indicator2_name_en')->nullable();
            $table->string('indicator2_value')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_uz')->nullable();
            $table->string('title_en')->nullable();
            $table->string('icon')->nullable();
            $table->string('photo')->nullable();
            $table->text('short_description_ru')->nullable();
            $table->text('short_description_uz')->nullable();
            $table->text('short_description_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
