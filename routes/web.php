<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('forgetpassword',function(){
	return view('profile.forgetpassword');
});
Route::post('setToken','ProfileController@setToken');

Route::post('/setToken/{token}',function($token){
	echo $token;
});*/

Route::get('/', function () {
    return view('welcome');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin','MainController@checklogin');
Route::get('main/successlogin','MainController@successlogin');
Route::get('main/logout','MainController@logout');
Route::get('register','AdminController@register');
