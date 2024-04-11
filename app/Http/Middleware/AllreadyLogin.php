<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AllreadyLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('LoginUser') && ( url('login')==$request->url() || url('register')==$request->url() )){
            return redirect('dashboard')->with('success', 'You have allready Login');
        }
        return $next($request);
    }
}
