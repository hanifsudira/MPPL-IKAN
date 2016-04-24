<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input ;
use DB;
use Validator;
use Hash;

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

    public function editprofile (Request $request){
        $input = $request->all();

        $id_user = Auth::user()->id_user;

        $fullname=$input['fullname'];
        $email=$input['email'];
        $tempat_lahir=$input['tempat_lahir'];
        $tanggal_lahir=$input['tanggal_lahir'];
        $jenis_kelamin=$input['jenis_kelamin'];
        $result = DB::select("call SP_EditProfile(?,?,?,?,?,?)",array($id_user,$fullname,$email,$tempat_lahir,$tanggal_lahir,$jenis_kelamin));

        return redirect("profile");
    }
    
    public function change_password (Request $request){
        $input = $request->all();

        $id_user = Auth::user()->id_user;
        $password_user = Auth::user()->password;
        $old_password=$input['old_password'];
        $password=$input['password'];
        $hashedPassword = bcrypt($old_password);
        $password = bcrypt($password);
    
        if (Hash::check($old_password, $hashedPassword)){
            $result = DB::select("call SP_EditPassword(?,?)",array($id_user,$password));
        }
        return redirect("profile");
    }
    
    public function submit (Request $request){
        $input = $request->all();

        $id_user = Auth::user()->id_user;

        $judul=$input['judul'];
        $deskripsi=$input['deskripsi'];
        $jenis_ikan=$input['inputkategori'];
        $jenis_penjual=$input['inputjenis'];
        $provinsi=$input['provinsi'];
        $kota=$input['kota'];
        $longtitude=$input['longtitude'];
        $latitude=$input['latitude'];
        $harga_kg=$input['harga_kg'];
        $result = DB::select("call SP_NewPost(?,?,?,?,?,?,?,?,?,?)",array($id_user,$judul,$deskripsi,$jenis_ikan,$jenis_penjual,$provinsi,$kota,$longtitude,$latitude,$harga_kg));
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
            return redirect("posting/$id");
        }
    }
    public function edit (Request $request){
        $input = $request->all();
        
        $id=$input['id'];
        $judul=$input['judul'];
        $deskripsi=$input['deskripsi'];
        $jenis_ikan=$input['inputkategori'];
        $jenis_penjual=$input['inputjenis'];
        $provinsi=$input['provinsi'];
        $kota=$input['kota'];
        $longtitude=$input['longtitude'];
        $latitude=$input['latitude'];
        $harga_kg=$input['harga_kg'];
        DB::update("call SP_EditPost(?,?,?,?,?,?,?,?,?,?)",array($id,$judul,$deskripsi,$jenis_ikan,$jenis_penjual,$provinsi,$kota,$longtitude,$latitude,$harga_kg));

        if(Input::hasFile('gambar')) {
            $gambar=Input::file('gambar');
            $imageName = $id . '.' .
                $gambar->getClientOriginalExtension();

            $gambar->move(
                base_path() . '/public/image/news/', $imageName
            );
            DB::insert("call SP_InputPicture(?,?,?)", array($id, 1, "/image/news/$imageName"));
        }
        return redirect("posting/$id");

    }

    public function submitcomment (Request $request){
        $input = $request->all();

        $komentar=$input['komentar'];
        $id_user=$input['id_user'];
        $id_posting=$input['id_posting'];
        DB::insert("call SP_NewComment(?,?,?)",array($id_posting,$id_user,$komentar));
        return redirect("posting/$id_posting");
    }

}
