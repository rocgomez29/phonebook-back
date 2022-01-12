<?php

namespace App\Http\Middleware;
use App\Codigo;
use Http;
use Spatie\Permission\Models\Role;
use Closure;

class CheckApiValidate
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
      $codigo = codigo::all()->first();
          
      $respuesta= Http::get('https://apiauthservice.herokuapp.com/api/mostrar/clientes');

      $autorizacion = $respuesta->json();    

      foreach($autorizacion as $auth)
      {
        if ($auth['codigo']==$codigo->codigo)
        {
          return $next($request);
        }
      }
      
      return redirect('/home');
    }

}