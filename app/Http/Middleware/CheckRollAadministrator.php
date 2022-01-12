<?php

namespace App\Http\Middleware;
use App\User;
use Closure;
 use Illuminate\Http\Request;


class CheckRollAadministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
    
   
     $usuario = auth('api')->user();

        if($usuario==null){
             abort(403, 'No tienes autorización para ingresar');
        }else{            
            abort(403, 'tienes permiso');

        }
    }
}
