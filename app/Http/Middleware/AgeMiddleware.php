<?php

namespace smartApp\Http\Middleware;

use Closure;

class AgeMiddleware
{

    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}

?>