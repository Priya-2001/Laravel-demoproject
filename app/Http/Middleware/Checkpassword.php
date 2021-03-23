<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\UserController;
class Checkpassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$data)
    {
        $request->session()->put('data',$request->input());
        $data = $request->session()->get('data')['password'];
        $cmp = strcmp("123",$data);
        $cmp1 = strcmp("abc",$data);
        if(($cmp==0)||($cmp1 == 0))
        { 
            return redirect()->action(
        [UserController::class, 'index'], ['id' => 2]);
        }
        else
        {
            echo "Login unsuccessful!Please enter the correct password!";
        }
        return $next($request);
    }
}
