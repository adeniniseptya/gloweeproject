<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Ambil daftar admin dari env atau config
        $admins = explode(',', env('GLOWEE_ADMINS', 'admin@glowee.com'));
        $user = Auth::user();
        if ($user && in_array($user->email, $admins)) {
            return $next($request);
        }
        abort(403, 'Unauthorized');
    }
}
