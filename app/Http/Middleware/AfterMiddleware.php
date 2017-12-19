<?php

namespace App\Http\Middleware;

use Closure;

class AfterMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (Auth::check() && Auth::user()->subscribed())
        {

            return Redirect::action('subscription')->with('notice', 'You need need to Subscribe to do that!');

        }

        return $response;
    }
}
