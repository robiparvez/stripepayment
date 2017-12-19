<?php

namespace App\Http\Middleware;

use Closure;

class BeforeMiddleware
{

    public function handle($request, Closure $next)
    {

        if (Auth::check() && !Auth::user()->subscribed())
        {
            return Redirect::action('subscription')->with('notice', 'You need need to Subscribe to do that!');
        }
        return $next($request);
    }
}
