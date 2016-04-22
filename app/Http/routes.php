<?php

use Illuminate\Support\Facades\Input;
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

Route::get('/', 'PostController@index');

Route::get('/home2', 'PostController@index');

Route::get('/login2', 'PostController@login');
Route::group(['middleware' => ['web']], function () {
    Route::get('/login2', 'PostController@login');
    Route::get('/register2', 'PostController@register');
    // your routes here
});

Route::get('/register2', 'PostController@register');

Route::get('/posting/{id}', 'PostController@posting');

Route::get('/newpost', 'PostController@newpost');

Route::get('/editpost', 'PostController@editpost');

Route::post('/listsearch', 'PostController@listsearch');

Route::get('/profile', 'HomeController@profile');

Route::get('/editprofile', 'HomeController@editprofile');

Route::get('/cek/{id}', 'PostController@cek');

Route::post('/submit_post', 'HomeController@submit');

Route::post('/submit_comment', 'HomeController@submitcomment');


Route::auth();

Route::get('/home', 'HomeController@index');
