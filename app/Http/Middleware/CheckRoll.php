<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;


class CheckRoll
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
             abort(403, 'Este usuario no esta autenticado');
        }else{            
            $rol=$usuario->hasRole($role);

            if($rol==true){

                return $next($request);

            }else{

               abort(403, 'Esta opcion solo esta permitida para el roll  '.$role); 
            }

        }
    }
}

