<?php

namespace App\Http\Middleware;

use Closure;

class VerifyApp
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
        $url = $request->path();
        $app = auth()->user()->apps()->where('url', $url)->first();

        if ($app) {
            return $next($request);
        }

        return redirect()->route('home');
    }
}
