<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class StudDeleteController1 extends Controller
{
     public function index() {
      $users = DB::select('select * from report');
      return view('stud_delete_view1',['users'=>$users]);
   }
    public function destroy($id) {
      DB::delete('delete from report where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
      echo '<a href = "/delete-records">Click Here</a> to go back.';
   }
}