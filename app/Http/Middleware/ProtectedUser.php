<?php

namespace App\Http\Middleware;

use Closure;

class ProtectedUser
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
        $response = $next($request);

        $routeUser = null;

        if( !is_null($request->user) ){
            $routeUser = $request->user->id;
        } 
        
        if ( !is_null($request->role) ) {
            $routeUser = $request->role->id;
        } 

        if (  $request->user()->id === $routeUser ) {
            abort(403, 'Access prohibited');
        }

        return $response;
    }
}
