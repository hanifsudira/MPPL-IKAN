<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

use Illuminate\Foundation\Auth\ResetsPasswords;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['post_hot']=DB::select('call SP_ListPostHot(5)');
        $data['post_newer']=DB::select('call SP_ListPostNewer(5)');

        return view('home2',$data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login2');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('register2');
    }
    
    public function posting($id)
    {
        $result=DB::select('call SP_ListPost(?)',array($id));
        $data['listcomment']=DB::select('call SP_ListComment(?)',array($id));

        foreach( $result as $list) {
            $data['listpost']=$list;
        }
        return view('posting',$data);
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

    public function listsearch(Request $request)
    {
        $input = $request->all();
        $jenis_ikan=$input['jenis_ikan'];
        $jenis_penjual=$input['jenis_penjual'];
        $keyword=$input['keyword'];
        $data['post_list']= DB::select("call SP_Find(?,?,?)",array($keyword,$jenis_ikan,$jenis_penjual));
        $data['pencarian']=$keyword;
        return view('listsearch',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function cek($ket){
        $json_url = "http://www.wpi.kkp.go.id/info_harga_ikan/server.php?draw=2&columns%5B0%5D%5Bdata%5D=0&columns%5B0%5D%5Bname%5D=&columns%5B0%5D%5Bsearchable%5D=true&columns%5B0%5D%5Borderable%5D=true&columns%5B0%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B0%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B1%5D%5Bdata%5D=1&columns%5B1%5D%5Bname%5D=&columns%5B1%5D%5Bsearchable%5D=true&columns%5B1%5D%5Borderable%5D=true&columns%5B1%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B1%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B2%5D%5Bdata%5D=2&columns%5B2%5D%5Bname%5D=&columns%5B2%5D%5Bsearchable%5D=true&columns%5B2%5D%5Borderable%5D=true&columns%5B2%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B2%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B3%5D%5Bdata%5D=3&columns%5B3%5D%5Bname%5D=&columns%5B3%5D%5Bsearchable%5D=true&columns%5B3%5D%5Borderable%5D=true&columns%5B3%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B3%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B4%5D%5Bdata%5D=4&columns%5B4%5D%5Bname%5D=&columns%5B4%5D%5Bsearchable%5D=true&columns%5B4%5D%5Borderable%5D=true&columns%5B4%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B4%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B5%5D%5Bdata%5D=5&columns%5B5%5D%5Bname%5D=&columns%5B5%5D%5Bsearchable%5D=true&columns%5B5%5D%5Borderable%5D=true&columns%5B5%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B5%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B6%5D%5Bdata%5D=6&columns%5B6%5D%5Bname%5D=&columns%5B6%5D%5Bsearchable%5D=true&columns%5B6%5D%5Borderable%5D=true&columns%5B6%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B6%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B7%5D%5Bdata%5D=7&columns%5B7%5D%5Bname%5D=&columns%5B7%5D%5Bsearchable%5D=true&columns%5B7%5D%5Borderable%5D=true&columns%5B7%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B7%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B8%5D%5Bdata%5D=8&columns%5B8%5D%5Bname%5D=&columns%5B8%5D%5Bsearchable%5D=true&columns%5B8%5D%5Borderable%5D=true&columns%5B8%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B8%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B9%5D%5Bdata%5D=9&columns%5B9%5D%5Bname%5D=&columns%5B9%5D%5Bsearchable%5D=true&columns%5B9%5D%5Borderable%5D=true&columns%5B9%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B9%5D%5Bsearch%5D%5Bregex%5D=false&columns%5B10%5D%5Bdata%5D=10&columns%5B10%5D%5Bname%5D=&columns%5B10%5D%5Bsearchable%5D=true&columns%5B10%5D%5Borderable%5D=true&columns%5B10%5D%5Bsearch%5D%5Bvalue%5D=&columns%5B10%5D%5Bsearch%5D%5Bregex%5D=false&order%5B0%5D%5Bcolumn%5D=0&order%5B0%5D%5Bdir%5D=asc&start=0&length=100&search%5Bvalue%5D=&search%5Bregex%5D=false&_=1460547988959";
        $json = file_get_contents($json_url);
        $data = json_decode($json, true);
        //print_r($data['data']);
        //print_r($data);


        $ikan[1]="bandeng";
        $ikan[2]="Cakalang";
        $ikan[3]="Gurami";
        $ikan[4]="Kembung";
        $ikan[5]="Layang";
        $ikan[6]="Lele";
        $ikan[7]="Nila";
        $ikan[8]="Patin";
        $ikan[9]="Tongkol";
        $ikan[10]="Udang Putih";

        for ($x = 1; $x <= 10; $x++) {
            $harga_ikan[$x]=0;
            $total[$x]=0;
        }

        foreach ($data['data'] as $value) {
            $count=0;

            foreach ($value as $value1) {
                if($count==0){

                    $count++;
                    continue;
                }else{
                    $tes=str_replace(",", "", $value1);
                    if($tes!="-"){
                        $total[$count]++;
                        $harga_ikan[$count]=$harga_ikan[$count]+(int)$tes;
                        //echo "$harga_ikan[$count]=  $total[$count] $tes<br>";


                    }
                    $count++;
                }

            }
        }

        for ($x = 0; $x < 10; $x++) {

            if($total[$x+1]==0)
            {
                $harga_[$x] = 0;
            }
            else{
                $harga_[$x]= round($harga_ikan[$x+1]/$total[$x+1]);
            }


            $ikan_[$x]=$ikan[$x+1];

        }
        if($ket=="harga"){
            print_r(json_encode($harga_));
        }
        if($ket=="ikan"){
            print_r(json_encode($ikan_));
        }

    }

}
