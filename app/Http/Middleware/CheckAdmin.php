<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, ...$roles)
     {
      //  dd($roles);
        if($request->user()===null)
          return redirect()->route('login');
        if(is_array($roles)){
          foreach($roles as $role){
            if(Auth::user()->name == $role){
              return $next($request);
            }
          }
        }else{
          if(Auth::user()->name == $roles){
              return $next($request);
          }
        }
         return response("Insufficient Access",401);

     }
}
