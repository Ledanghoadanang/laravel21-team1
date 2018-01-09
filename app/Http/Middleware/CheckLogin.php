<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Kamaln7\Toastr\ToastrServiceProvider;
use Illuminate\Support\Facades\Input;
class CheckLogin
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
      if (Auth::check()){
        return $next($request);
      }

      
        return redirect('/home');
    }
}
