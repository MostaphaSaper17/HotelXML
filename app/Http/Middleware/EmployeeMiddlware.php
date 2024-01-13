<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EmployeeMiddlware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        dd('here');
        if(Auth::guard('employee')->user()){
            return $next($request);
        }
        if($request->ajax() || $request->wantsJson()){
            return response('Unauthorized.', 401);
        }else{
            return redirect(route('website.home'));
        }
    }
}
