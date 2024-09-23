<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        if(Auth::guard('admin')->check()){
            return redirect('dashboard_admin');
        } else if(Auth::guard('operator')->check()){
            return redirect('dashboard_operator');
        } else if(Auth::guard('user')->check()){
            return redirect('dashboard_user');
        }

        return $next($request);
    }
}
