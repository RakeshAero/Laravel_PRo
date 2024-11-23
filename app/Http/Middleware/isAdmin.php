<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class isAdmin
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

        // To check if the user is Admin or Not
        if(Auth::check() && Auth::user()->is_Admin()){

            // Allow the request to proceed
            return $next($request);
        }

        // Else return 403
        abort(403,'Unauthorized Access');
    }
}
