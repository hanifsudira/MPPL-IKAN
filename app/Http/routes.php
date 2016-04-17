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

Route::get('/posting', 'PostController@posting');

Route::get('/newpost', 'PostController@newpost');

Route::get('/editpost', 'PostController@editpost');

Route::get('/listsearch', 'PostController@listsearch');

Route::get('/profile', 'HomeController@profile');

Route::get('/editprofile', 'HomeController@editprofile');

Route::get('/cek/{id}', 'PostController@cek');

Route::post('/submit_post', function(){
    $input = Request::all();

    $judul=$input['judul'];
    $deskripsi=$input['deskripsi'];
    $jenis_ikan=$input['inputkategori'];
    $jenis_penjual=$input['inputjenis'];
    $provinsi=$input['provinsi'];
    $kota=$input['kota'];
    $longtitude=$input['longtitude'];
    $latitude=$input['latitude'];
    $harga_kg=$input['harga_kg'];
    $result = DB::select("call SP_NewPost(?,?,?,?,?,?,?,?,?,?)",array(1,$judul,$deskripsi,$jenis_ikan,$jenis_penjual,$provinsi,$kota,$longtitude,$latitude,$harga_kg));
    foreach( $result as $list) {
        $id=$list->id_posting ;
    }
    if(Input::hasFile('gambar')) {
        $gambar=Input::file('gambar');
        $imageName = $id . '.' .
            $gambar->getClientOriginalExtension();

        $gambar->move(
            base_path() . '/public/image/news/', $imageName
        );
        DB::insert("call SP_InputPicture(?,?,?)", array($id, 1, "$imageName"));
    }
});

Route::auth();

Route::get('/home', 'HomeController@index');
