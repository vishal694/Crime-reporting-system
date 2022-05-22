<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adlogincontroller extends Controller
{
    //
    public function index(Request $req)
    {
    	$data = $req->input();
    	$res -> session()->put('Uname',$data['Uname']);
    	echo session('Uname');
    }
}
