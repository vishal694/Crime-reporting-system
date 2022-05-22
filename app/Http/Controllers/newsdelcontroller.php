<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class newsdelcontroller extends Controller
{
    public function index() {
      $users = DB::select('select * from news');
      return view('newsdel',['users'=>$users]);
   }
   public function destroy($id) {
      DB::delete('delete from news where id = ?',[$id]);
      echo "Record deleted successfully.<br/>";
     return redirect('newsdel');
   }
}
