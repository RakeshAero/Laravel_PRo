<?php

namespace App\Http\Middleware;

use Closure;

class MonthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if($request->num > 3){
        return response("403 Bad Request",403)->header("content-type","text/html");
    }
        return $next($request);
    }
}
