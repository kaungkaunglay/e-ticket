<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        
        $host = $request->getHost();
        $parts = explode('.', $host);
        $locale = $parts[0]; 

     
        if (!in_array($locale, ['en', 'jp'])) {
            $locale = 'en'; 
        }

       
        App::setLocale($locale);

        return $next($request);
    }
}