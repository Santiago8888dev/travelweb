<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;


class LenguajeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('lenguajes'))) {
            App::setlocale(Session()->get('applocale'));
        }else{
            App::setlocale(Config('app.fallback_locale'));
        }
        return $next($request);
    }
}
