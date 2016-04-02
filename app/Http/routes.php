<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index') ;

Route::get('login','HomeController@login');

Route::get('register','HomeController@register');

Route::get('newpost','PostController@newpost');

Route::get('editpost','PostController@editpost');

Route::get('posting','PostController@posting');

Route::get('profile','HomeController@profile');

Route::get('editprofile','HomeController@editprofile');

Route::get('listsearch','PostController@listsearch');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});