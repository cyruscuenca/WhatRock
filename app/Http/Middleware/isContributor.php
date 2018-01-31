<?php

namespace App\Http\Middleware;

use Closure;

class isContributor
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
        if (!$request->user()->isContributor()) {
            return redirect('/');
        }

        return $next($request);
    }
}
