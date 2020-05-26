<?php

namespace App\Http\Middleware;

use Closure;

class UserLgl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(session()->get("applocale") == "en"){
            app()->setLocale("en");
        }
        if(session()->get("applocale") == "fr"){
            app()->setLocale("fr");
        }
        return $next($request);
    }
}
