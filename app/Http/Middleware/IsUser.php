<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsUser
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
        $userRole = Role::where('name', 'user')->first();
        if (Auth::user()->role_id  == $userRole->id) {
            return redirect(url('/parts/show-table'));
        };
        return $next($request);
    }
}
