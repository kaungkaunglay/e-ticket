<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $host = $request->getHost();
        $parts = explode('.', $host);
        $subdomain = count($parts) >= 3 ? $parts[0] : null;
        if (!$subdomain && $request->segment(1)) {
            $subdomain = $request->segment(1);
        }
        $locale = $this->getLocale($subdomain) ?? 'en';
        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }

    private function getLocale($locale)
    {
        if (!$locale) return null;
        $language = DB::table('translations')->where('key', $locale)->first();
        return $language ? $locale : null;
    }
}
