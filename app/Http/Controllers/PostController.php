<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function editpost(){
        return view('editpost');
    }
    public function newpost(){
        return view('newpost');
    }
    public function posting(){
        return view('posting');
    }
    public function listsearch(){
        return view('listsearch');
    }


}
