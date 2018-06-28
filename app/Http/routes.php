<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function (){
    return view('welcome');
});

Route::get('/admin/{username}/{accesslevel}', function ($username, $accesslevel){
    //return view('adminpage');
    return "welcome ".$username." ".$accesslevel;
});

Route::get('/user', array('as' => 'user.home', function (){
    //return view('userpage');

    $url = route('user.home');
    return "this url is ".$url;
}));

Route::get('/inventory/{type}', 'InventoryController@index');
*/

Route::resource('inventory', 'InventoryController');
