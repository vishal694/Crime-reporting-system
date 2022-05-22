<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class newscontroller extends Controller
{
     public function insertform() {
      return view('news');
   }
	
   public function insert(Request $request) {
      $name = $request->input('name');
      DB::insert('insert into news(name) values(?)',[$name]);
      return redirect('news');
   }
   public function index() {
      $users = DB::select('select * from news');
      return view('welcome',['users'=>$users]);
   }
}
