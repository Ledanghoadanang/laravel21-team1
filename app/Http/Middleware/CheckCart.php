<?php

namespace App\Http\Middleware;
use Cart;
use Closure;

class CheckCart
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
      if (Cart::count() > 0 ){
        return $next($request);
      }

        return redirect('/home');
    }
}
