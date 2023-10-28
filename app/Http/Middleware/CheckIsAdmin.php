<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        //$user = auth()->user();
        //dd($user->is_admin);

        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        abort(403);

        //return $next($request);
    }
}
