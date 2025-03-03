<?php

use Illuminate\Support\Facades\Route;
use App\Models\Translation;
use Illuminate\Support\Facades\App;

if (!function_exists('translate')) {
    function translate($key)
    {
        $locale = App::getLocale(); 
        $translation = Translation::where('key', $key)->first();
        return $translation ? ($translation->$locale ?? $translation->en) : $key;
    }
}
