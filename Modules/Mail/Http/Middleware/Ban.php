<?php

namespace Modules\Mail\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Ban
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request Request
     * @param \Closure                 $next    Next
     * 
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->banned) {
            return redirect()->route('403');
        }

        return $next($request);
    }
}
