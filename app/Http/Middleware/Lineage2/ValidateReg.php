<?php
  
namespace App\Http\Middleware\Lineage2;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Log;

use Closure;
use App;
  
class ValidateReg{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}