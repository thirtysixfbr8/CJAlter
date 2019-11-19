<?php

namespace App\Http\Middleware;

use Closure;

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
        if(auth()->check())
        {
           
            switch($request->user()->perfilId){
                case 1:
                    return redirect('/backoffice/admin');
                case 2:
                    return redirect('/backoffice/mediador');
                case 3:
                    return redirect('/backoffice/cliente');
                    break;
                case 4:
                    return redirect('/backoffice/cliente');
            }
        }
        return $next($request);
    }
}
