<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Helpers\UserSystemInfoHelper;
use Illuminate\Support\Facades\Auth;

class RateLimit
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
        // if(Auth::guard('web')->check()){
        //     \App\Models\User::where('id',auth()->user()->id)->update(['last_activity'=>now()]);
        //     $rate_limit = \MainHelper::rate_limit_insert();
        //     return $next($request);
        // }
        return $next($request);
    }
}
