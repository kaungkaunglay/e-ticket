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
            $table->text('logo');
            $table->text('cover_image')->nullable();
            $table->text('multi_images')->nullable();
            $table->text('description');
            $table->string('address');
            $table->string('city')->nullable();
            $table->text('sub_towns')->nullable();
            $table->string('zip_code');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('phone_number');
            $table->string('email');
            $table->string('website_url')->nullable();
            $table->string('operating_hours');
            $table->string('closed_days')->nullable();
            $table->string('price_range');
            $table->text('discount')->nullable();
            $table->boolean('wifi_availability')->default(false)->nullable();
            $table->boolean('parking_availability')->default(false)->nullable();
            $table->boolean('outdoor_seating')->default(false)->nullable();
            $table->json('social_links')->nullable();
            $table->string('menu')->nullable();
            $table->text('google_map')->nullable();
            $table->string('status'); 
            $table->string('available')->nullable();
            $table->string('smoking')->nullable();
            $table->string('user_id')->nullable();
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
