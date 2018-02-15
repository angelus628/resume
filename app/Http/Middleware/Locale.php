<?php

namespace App\Http\Middleware;

use Closure;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->method() == 'GET' || $request->method() == 'POST'){
            $locale = $request->segment(1);
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
