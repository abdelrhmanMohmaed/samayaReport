<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $adminRole = Role::where('name', 'admin')->first();
        if (Auth::user()->role_id  == $adminRole->id) {
            return redirect(url('/parts/show-table'));
        };
        return $next($request);
    }
}
