<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    public function handle(Request $request, Closure $next): Response
    {
        if( session()->has('locale') ){
            App::setlocale(session()->get('locale'));
        }
        return $next($request);
    }
}
