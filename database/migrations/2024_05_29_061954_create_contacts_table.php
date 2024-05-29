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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('first_phone')->nullable();
            $table->string('second_phone')->nullable();
            $table->string('footer_phone')->nullable();
            $table->string('person_name')->nullable();
            $table->string('tg_for_contact')->nullable();
            $table->string('tg_chanel')->nullable();
            $table->string('instagram')->nullable();
            $table->string('instagram_qr')->nullable();
            $table->string('facebook')->nullable();
            $table->string('facebook_qr')->nullable();
            $table->string('location')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_ru')->nullable();
            $table->string('address_uz')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
