<?php
namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        //if ($request->session()->has('e_id') || $request->session()->has('uid')) {
            return $next($request);
       // }

        //return redirect('/')->with('error','Unauthorised Access');
    }
}
