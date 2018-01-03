<?php

namespace App\Http\Middleware;

use Closure;

class isMod
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
        //return $next($request);
        $user = $request->user();
            if ($user->role->name == 'Moderator'){
                return $next($request);
            }
        return redirect('/');
    }
}
