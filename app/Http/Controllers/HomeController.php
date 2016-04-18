<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('profile');
    }

    public function editprofile()
    {
        return view('editprofile');
    }
    public function submit (Request $request){
        $input = $request->all();

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
            DB::insert("call SP_InputPicture(?,?,?)", array($id, 1, "/image/news/$imageName"));
            return redirect('posting');
        }
    }

}
