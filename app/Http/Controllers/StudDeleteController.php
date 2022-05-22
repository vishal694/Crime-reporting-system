<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudDeleteController extends Controller {
   public function index() {
      $users = DB::select('select * from report');
      return view('stud_delete_view',['users'=>$users]);
   }
}