<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('applocale') && array_key_exists(Session::get('applocale'), Config::get('app.languages'))) {
            App::setLocale(Session::get('applocale'));
        } else {
            // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale(Config::get('app. fallback_locale'));
        }
        return $next($request);
    }
}
