<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contact; use Mail; 

class insertcontroller extends Controller
{
    //
    public function display()
    {
    	return view('user');
    }
    public function save(Request $request)
    {
    	$name = $request->input('name');
    	$mobile = $request->input('mobile');
        $email = $request->input('email');
    	$psw = $request->input('psw');
    	$adhar = $request->input('adhar');
    	$address = $request->input('address');


    	DB::insert('insert into exam (name,mobile,email,psw,adhar,address) values(?,?,?,?,?,?)',[$name,$mobile,$email,$psw,$adhar,$address]);


        Mail::send('mail',
             array(
                 'name' => $request->get('name'),
                 'mobile' => $request->input('mobile'),
                 'email' => $request->get('email'),
             ), function($message) use ($request)
               {
                  $message->to($request->email);
               });
        return redirect('report')->with('success','You are registed in site');

         

    }
}
