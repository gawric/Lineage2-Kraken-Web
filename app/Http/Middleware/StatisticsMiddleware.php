<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;
use App\Providers\Events\WebStatistics;
use App\Service\Utils\FunctionSupport;


class StatisticsMiddleware
{



    public function __construct()
    {

    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
       
       
        $response = $next($request);
        event(new WebStatistics(FunctionSupport::createModelVisitStatis($request->ip() , $request->url())));
        return $response;
    }

    
}