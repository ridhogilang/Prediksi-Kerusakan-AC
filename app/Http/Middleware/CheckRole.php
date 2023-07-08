<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna terotentikasi dan memiliki role_id = 1
        if (Auth::check() && Auth::user()->role_id === 1) {
            return $next($request);
        }

        // Jika tidak memenuhi syarat, redirect ke halaman yang sesuai atau berikan respons yang sesuai
        return redirect('/')->with('error', 'Akses ditolak.');
    }
}
