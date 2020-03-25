<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller {
   public function insertform() {
      return view('/insertdata');
   }

   public function insert(Request $request) {
      $id = $request->input('user_id');
      $name=$request->input('user_fullname');
      $nid = $request->input('user_nid');
      $dob=$request->input('user_dob');
      $address = $request->input('user_address');
      DB::insert('INSERT INTO user_bio (Mobile_No) VALUES (?)',[$id]);
      DB::insert('INSERT INTO user_bio (Full_Name) VALUES (?)',[$name]);
      DB::insert('INSERT INTO user_bio (NID) VALUES (?)',[$nid]);
      DB::insert('INSERT INTO user_bio (DateOfBirth) VALUES (?)',[$dob]);
      DB::insert('INSERT INTO user_bio (Address) VALUES (?)',[$address]);
    /*  echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }*/
}
