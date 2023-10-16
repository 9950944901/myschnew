<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TeacherLogin
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
        if(session()->has('TEACHERSET') || session()->has('TEACHERDATA')){
            return $next($request);
                }
              return redirect()->route('Teacher.Login');
    }
}
