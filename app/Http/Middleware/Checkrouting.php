<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\UserController;
class Checkrouting
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$check)
    {
        //$request->session()->put('data',$request->input());
        //$data = $request->session()->get('data')['password'];
        $path = $request->path();
        echo $path; 
        $check1 = $request->session()->get('check');
        //$cmp = strcmp("123",$data);
        $cmp1 = strcmp("True",$check1);
        echo $cmp1;
        if(strcmp($check1,"True") == 0)
        {
            //echo "Login successful!";
            //request->session()->put('check','True');
            
            //echo $check1;
            //Route::get('/route1/{id}', 'UserController@index');
            //return redirect()->action(
        //[UserController::class, 'index'],['id' => 2]);
        }
        else
        {
            echo "Login unsuccessful!Please enter the correct password!";
            //request->session()->put('check','False');
        }
        return $next($request);
    }
}
