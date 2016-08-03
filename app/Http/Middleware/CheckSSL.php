<?php

namespace App\Http\Middleware;

use Closure;

class CheckSSL
{
    public function handle($request, Closure $next)
    {
        if (!$request->secure()) {
            abort(403, 'HTTPS required.');
        }

        return $next($request);
    }
}