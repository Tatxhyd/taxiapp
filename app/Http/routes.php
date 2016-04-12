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

Route::get('/', function () {
    return view('hellotheme');
});
//Route::get('login1', [
//    'as' => 'login', 'uses' => 'Security\SecurityController@index'
//]);
Route::controllers([
    'admin' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
 
Route::auth();

Route::get('/home', 'HomeController@index');
