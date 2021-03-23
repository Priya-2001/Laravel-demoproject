<?php
use App\Userdatainsert;

Route::get('/route1/{id}', 'UserController@index');

Route::get('/insert',function(){  
$user=new Userdatainsert;  
$user->name='Patrick';  
$user->phone_number='8424312389';  
$user->save();  
});

Route::view('login','login');

route::post('login','Passwordcontroller@index')->middleware('password:data');