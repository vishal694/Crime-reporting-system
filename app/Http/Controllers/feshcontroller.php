<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class feshcontroller extends Controller
{
    //
    public function index()
	{ $users = DB::select('select * from feedback');
return view('fesh',['users'=>$users]);
}

 public function destroy($id) {
      DB::delete('delete from feedback where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
}
