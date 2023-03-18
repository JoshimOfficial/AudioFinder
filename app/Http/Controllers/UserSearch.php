<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cookie;
use DB;

use Illuminate\Http\Request;

class UserSearch extends Controller
{
  
  public function UserQuery(Request $queryValue) {
    $searchTerm = $queryValue->q;
    $current_time = date('Y-m-d H:i:s');

    if (!Cookie::has('_RAND_ID')) {

    function generateRandomNumber($length) {

      $min = pow(10, $length - 1);
      $max = pow(10, $length) - 1;
      return mt_rand($min, $max);
    }
    $userTempId = generateRandomNumber(15);
    $cookie = cookie('_RAND_ID', $userTempId, 5);

    DB::table('users_search')->insert([
      'user_search_query' => $searchTerm,
      'temp_user_id' => Cookie::get('_RAND_ID'),
      'created_at' => $current_time
    ]);

    return redirect()->route('user.search.audio', ['data' => $searchTerm])->cookie($cookie);
  }
  else {
        DB::table('users_search')->insert([
          'user_search_query' => $searchTerm,
          'temp_user_id' => Cookie::get('_RAND_ID'),
          'created_at' => $current_time
        ]);

        $validUserList = DB::table('users_search')->pluck('temp_user_id');

        if($validUserList->contains(Cookie::get('_RAND_ID'))) {
        $validUserSearchList = DB::table('users_search')->pluck('user_search_query');

        if($validUserSearchList->contains($searchTerm)) {
                 return redirect()->route('user.search.audio', ['data' => $searchTerm]);
        }
          
        }

  } 
  }
}
