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
    return view('home2');
});

Route::get('/home2', 'PostController@index');

Route::get('/login2', 'PostController@login');

Route::get('/register2', 'PostController@register');

Route::get('/posting', 'PostController@posting');

Route::get('/newpost', 'PostController@newpost');

Route::get('/editpost', 'PostController@editpost');

Route::get('/listsearch', 'PostController@listsearch');

Route::get('/profile', 'HomeController@profile');

Route::get('/editprofile', 'HomeController@editprofile');

Route::auth();

Route::get('/home', 'HomeController@index');
