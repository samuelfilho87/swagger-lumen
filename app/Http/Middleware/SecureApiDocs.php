<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SecureApiDocs
{
    /**
     * Handle an incoming request.
     *
     * @param Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (env('APP_ENV') === 'local') {
            return $next($request);
        }
    }
}