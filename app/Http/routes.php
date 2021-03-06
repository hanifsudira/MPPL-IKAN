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

Route::get('/newpost', 'HomeController@newpost');

Route::get('/editpost/{id}', 'HomeController@editpost');

Route::get('/deletepost/{id}', 'HomeController@deletepost');

Route::post('/listsearch', 'PostController@listsearch');

Route::get('/profile', 'HomeController@profile');

Route::get('/lihatprofile/{id}', 'HomeController@lihatprofile');

Route::post('/rating', 'HomeController@rating');

Route::post('/editprofpic', 'HomeController@editprofpic');

Route::post('/editprofile', 'HomeController@editprofile');

Route::post('/change_password', 'HomeController@change_password');

Route::get('/cek/{id}', 'PostController@cek');

Route::post('/submit_post', 'HomeController@submit');

Route::post('/edit_post', 'HomeController@edit');

Route::post('/submit_comment', 'HomeController@submitcomment');

Route::auth();

Route::get('/home', 'HomeController@index');
