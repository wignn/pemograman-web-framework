<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Console log untuk debugging - akan muncul di terminal
        error_log('Request URL: ' . $request->url());
        error_log('Request Method: ' . $request->method());
        error_log('User Role: ' . (Auth::check() ? Auth::user()->role : 'Not logged in'));
        error_log('Required Roles: ' . implode(', ', $roles));
        
        // Jika user tidak login, redirect ke login
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        // Jika tidak ada role parameter, lanjutkan request
        if (empty($roles)) {
            return $next($request);
        }
        
        // Cek apakah user memiliki salah satu role yang diizinkan
        $userRole = Auth::user()->role;
        
        foreach($roles as $role) {
            if($userRole == $role){
                return $next($request);
            }
        }
        
        // Jika tidak memiliki akses yang sesuai, jangan logout
        Auth::logout();
        return redirect()->route('dashboard')->with('error', 'You are not authorized to access this page.');
    }
}
