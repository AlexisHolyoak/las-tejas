<?php

namespace lastejas\Http\Middleware;

use Closure;

class CheckRoles
{
    public function handle($request, Closure $next)
    {
        $roles = array_slice( func_get_args(), 2);
        if(auth()->user()->hasRole($roles)){
            return $next($request);
        }
        return redirect('/');
    }
}
