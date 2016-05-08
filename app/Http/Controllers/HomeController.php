<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input ;
use DB;
use Validator;
use Hash;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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

    public function newpost()
    {
        return view('newpost');
    }

    public function editpost($id)
    {

        $result=DB::select('call SP_ListPost(?)',array($id));

        foreach( $result as $list) {
            $data['listpost']=$list;
        }
        return view('editpost',$data);
    }

    public function deletepost($id)
    {
        $id_user = Auth::user()->id_user;
        $result=DB::delete('DELETE FROM Posting WHERE id_posting=? and id_user=?',array($id,$id_user));

        return redirect('profile');
    }

    public function profile()
    {
        $id = Auth::user()->id_user;
        $data['post_list']= DB::select("call SP_ListProfile(?)",array($id));

        return view('profile',$data);
    }

    public function lihatprofile($id_user)
    {
        if($id_user==Auth::user()->id_user)
            return redirect("profile");         

        $id =(int)$id_user;
        $data['post_list']= DB::select("call SP_ListProfile(?)",array($id));
        $result=DB::select('call SP_GetProfile(?)',array($id));
        foreach( $result as $list) {
            $data['listprofile']=$list;
        }

        return view('lihatprofile',$data);
    }

    public function editprofpic(Request $request)
    {
        $input = $request->all();
        $id_user = Auth::user()->id_user;
        if(Input::hasFile('gambar')) {
            $gambar=Input::file('gambar');
            $imageName = $id_user . '.' .
                $gambar->getClientOriginalExtension();

            $gambar->move(
                base_path() . '/public/image/profile/', $imageName
            );
//            print $gambar;
        
            $result = DB::update("call SP_InputPicture(?,?,?)", array($id_user, 0, "/image/profile/$imageName"));
        }
        if($result)
            return redirect("profile");
    }

    public function rating(Request $request)
    {
        $input = $request->all();
        $id = $input['id'];
        $val_rating = $input['rating'];
        $id_user = Auth::user()->id_user;

        $result= DB::select("call SP_GetRating(?)",array($id));
        foreach($result as $value ){
            $rating = $value->rating;
        }
        $temp=array();

        $arr_rating = explode("|", $rating);
        if($rating==null){
            $final_rating = implode(",",array((string)$id_user,$val_rating));
        }
        elseif(sizeof($arr_rating)>=1){
            $flag=0;
            foreach ($arr_rating as $value) {
                if($id_user==explode(",", $value)[0]){
                    $flag=1;
                    $value = implode(",",array(explode(",", $value)[0],$val_rating));
                }
                array_push($temp,$value);
            }
            if($flag==0){
                array_push($temp,implode(",",array($id_user,$val_rating)));
            }

            $final_rating = implode("|",$temp);

        }

        var_dump($final_rating);

        $result = DB::update("call SP_SetRating(?,?)", array($final_rating,$id));
        if($result)
            return redirect("lihatprofile/$id");
    }

    public function editprofile (Request $request){
        $input = $request->all();

        $id_user = Auth::user()->id_user;

        $fullname=$input['fullname'];
        $email=$input['email'];
        $tempat_lahir=$input['tempat_lahir'];
        $tanggal_lahir=$input['tanggal_lahir'];
        $jenis_kelamin=$input['jenis_kelamin'];
        if(Auth::check()){
            $result = DB::update("call SP_EditProfile(?,?,?,?,?,?)",array($id_user,$fullname,$email,$tempat_lahir,$tanggal_lahir,$jenis_kelamin));
        }
        if($result)
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
            $result = DB::update("call SP_EditPassword(?,?)",array($id_user,$password));
       
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
