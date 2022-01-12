<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Spatie\Permission\Models\Permission;
class Checkpermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$permission)

    {   

        $usuario = auth('api')->user();

        $permiso=Permission::where('name',$permission)->first();

        if($permiso==null){
            abort(403, 'Este permiso no existe');
        }else{
     
                if($usuario==null){
                     abort(403, 'Este usuario no esta autenticado');
                }else{ 
            
                   $permiso = $usuario->hasPermissionTo($permission);

                    if($permiso==false){
                        abort(403, 'Este usuario no tiene los permisos para acceder a esta ruta');
                    }else{
                       return $next($request); 
                    }
                }
        } 
    }
}
