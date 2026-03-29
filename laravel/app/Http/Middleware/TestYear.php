<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestYear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Usar ->route() para obtener el parámetro de la URL.
        $year = $request->route("year");
        
        if (is_null($year) || $year != 2019) {
            return redirect('/peliculas');
        }
        
        // Si todo está correcto (es decir, el año es 2019), dejar pasar la petición a detalle_1
        return $next($request);
    }
}
