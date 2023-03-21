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
        //$data2 = $request->education;
       // Log::info("Finish request");
       // Log::info($request);
        //$data = json_decode($data2, true);
        //$data = json_decode($request->all(), true);
       // $rules = [
       //   "name"=> "required|array|min:3",
       //   "password"=> 'required|min:7|max:255',
     // ];
     // Log::info("Parce");
      //Log::info($data);

       // $validator = Validator::make($data, $rules);
       // if ($validator->passes()) {
            //TODO Handle your data
       // } else {
            //TODO Handle your error
        //    dd($validator->errors()->all());
      // }
       // Log::info($validator);
        //dd($data);
        //$collection = collect(json_decode($json_here, true));
        //$data = $collection->where('id', 1)->data;
        return $next($request);
    }
}