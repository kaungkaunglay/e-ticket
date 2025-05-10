<?php

use App\Models\Translation;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

if (!function_exists('translate')) {
    function translate($key)
    {
        $locale = App::getLocale();
        $translation = Translation::where('key', $key)->first();
        
        if ($translation) {
            return $translation->$locale ?? $key; 
        }

        return $key;
    }
}

// if (!function_exists('locale_route')) { 
//     function locale_route($name, $parameters = [], $absolute = true)
//     {
//         $parameters = array_merge(['locale' => App::getLocale()], $parameters);
//         return Route::has($name) ? route($name, $parameters, $absolute) : '#'; 
//     }
// }


if (!function_exists('locale_route')) { 
    function locale_route($name, $parameters = [], $absolute = true)
    {

        unset($parameters['locale']);

        return Route::has($name) ? route($name, $parameters, $absolute) : '#'; 
    }
}

