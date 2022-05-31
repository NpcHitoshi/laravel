<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao, $perfil)
    {
        if($metodo_autenticacao == 'padrao'){
            echo 'Verificar o usuário e senha no banco de dados';
        }

        if($perfil == 'visitante') {
            echo 'Exibir alguns recursos';
        }
        
        if(true){
            return $next($request);
        } else {
            return Response('Acesso negado! Rota exige autenticacao');
        }
    }
}
