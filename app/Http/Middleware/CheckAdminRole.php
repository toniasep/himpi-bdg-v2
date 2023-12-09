<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdminRole
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
        if(auth()->user()->role == 'admin' || auth()->user()->role == 'operator' )
        {
            return $next($request);
        }

        return redirect()->back()->with(['message' => 'Anda tidak bisa masuk ke panel admin', 'error' => 'warning']);
    }
}
