<?php
  
namespace App\Http\Middleware\Lineage2;

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
        $input = $request->all();
        Log::info($input);
        //$collection = collect(json_decode($json_here, true));
       // $data = $collection->where('id', 1)->data;
        return $next($request);
    }
}