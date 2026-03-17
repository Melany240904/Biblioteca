<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserType
{
    public function handle(Request $request, Closure $next, string $user_type): Response
    {
        if ($request->user()->user_type !== $user_type) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
