<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_admin) {  // или true, в зависимости от типа поля
            return $next($request);
        }

        abort(403, 'Доступ запрещён');
        // Или: return redirect('/')->with('error', 'Нет доступа');
    }
}