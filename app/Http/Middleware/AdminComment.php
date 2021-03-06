<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminComment
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
      if (Auth::user() && Auth::user()->isAdmin == 1 && (Auth::user()->adminRole == 'GameMaster' || Auth::user()->adminRole == 'Comment Checker')) {
        return $next($request);
      }

        return redirect()->back();
    }
}
