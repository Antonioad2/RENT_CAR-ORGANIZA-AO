<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckNivel
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        if ($user->role !== $role) {
            // Role errada: redireciona baseado na role atual (seu código atual)
            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            }
            // Para 'user' ou outras, em vez de redirecionar, aborta com 403 (evita "ficar no erro")
            abort(403, 'Acesso negado. Você não tem permissão para esta área.');
            // OU mantenha o redirecionamento: return redirect()->route('site.home');
        }

        return $next($request);
    }
}