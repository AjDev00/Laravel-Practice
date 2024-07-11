<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "JustWeb Technology!";
        $year = date("Y");
        
        if($year != "2023"){
            echo "Go back to 2023 to view this website.";
            exit;
        }
        return $next($request);
    }
}
