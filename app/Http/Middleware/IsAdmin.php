<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Enums\Role; // Pastikan ini ada

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user login DAN role-nya ADMIN
        if (auth()->check() && auth()->user()->role === Role::ADMIN) {
            return $next($request);
        }

        // Jika tidak, tolak akses
        abort(403, 'AKSES DITOLAK: Anda bukan Admin.');
    }
}