<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('en')->nullable();
            $table->text('jp')->nullable();
            $table->timestamps();
        });

       
        DB::table('translations')->insert([
            ['key' => 'welcome', 'en' => 'Welcome', 'jp' => 'ようこそ'],
            ['key' => 'login', 'en' => 'Login', 'jp' => 'ログイン'],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('translations');
    }
};
