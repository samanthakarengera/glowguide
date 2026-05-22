<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // als user niet ingelogd is
        if (!Auth::check()) {

            return redirect('/login');
        }
        // als user geen admin is
        if (!Auth::user()->is_admin){

            abort(403);
        }

        return $next($request);
    }
}