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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('logo');
            $table->string('cover_image')->nullable();
            $table->text('description');
            $table->string('address');
            $table->string('city');
            $table->string('zip_code');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('phone_number');
            $table->string('email');
            $table->string('website_url')->nullable();
            $table->string('operating_hours');
            $table->string('closed_days')->nullable();
            $table->string('price_range');
            $table->boolean('wifi_availability')->default(false);
            $table->boolean('parking_availability')->default(false);
            $table->boolean('outdoor_seating')->default(false);
            $table->json('social_links')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
