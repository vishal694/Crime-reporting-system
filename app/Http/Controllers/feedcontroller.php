<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class feedcontroller extends Controller
{
    //
    public function display()
    {
    	return view('feedback');
    }
    public function save(Request $request)
    {
    	$name = $request->input('name');
    	$mobile = $request->input('mobile');
    	$address = $request->input('address');
    	$subject = $request->input('subject');

    	DB::insert('insert into feedback (name,mobile,address,subject) values(?,?,?,?)',[$name,$mobile,$address,$subject]);

    	return redirect('feedback')->with('success','Thanks for your Feedback');
    }
}
