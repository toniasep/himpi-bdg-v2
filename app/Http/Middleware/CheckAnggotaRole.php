<?php

namespace App\Http\Middleware;

use Closure;

class CheckAnggotaRole
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
        if(auth()->user()->role == 'anggota')
        {
            return $next($request);
        }

        return redirect()->back()->with(['message' => 'Panel ini hanya dapat di akses oleh Anggota', 'error' => 'warning']);
    }
}
