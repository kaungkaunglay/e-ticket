<?php

namespace App\Providers;

use App\Models\Settings;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // check table has or not first

   
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if(Schema::hasTable('settings')){
            $settings = Settings::all();
            foreach ($settings as $setting) {
                config()->set($setting->name, value: $setting->value);
            }
        }
    }
}
