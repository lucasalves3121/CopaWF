<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class VerifyModality
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $modalityId = decrypt($request->route('modalityId'));

            if ($modalityId > getAllModalities()->count())
                throw ValidationException::withMessages(['error' => 'Modalidade inválida']);

            Auth::user()->changeModalityLogged($modalityId);

            return $next($request);
        }catch (\Exception $e){
            throw ValidationException::withMessages(['error' => 'Erro ao redirecionar à modalidade']);
        }

    }
}
