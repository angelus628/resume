<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Locale
{
    public function handle(Request $request, Closure $next)
    {
        if($request->method() == 'GET' || $request->method() == 'POST'){
            $locale = $request->segment(1);
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
