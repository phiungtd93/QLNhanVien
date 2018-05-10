<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMaster;
use App\Library;

class UserController extends Controller
{
    public function index() {
    	$users = UserMaster::all();
    	$libs = Library::where('library_id', '=', 1)->get();
    	return view('index')->with('libs', $libs)->with('users', $users);
    }

  //   public function save(Request $req) {
  //   	return response()->json([
  //   		// 'users' => $users,
  //   		// 'libs' => $libs
		// ]);
  //   }

    public function search(Request $request) {
    	$key = $request->input('userid');
    	$libs = Library::where('library_id', '=', 1)->get();
    	$users = UserMaster::find($key);
    	var_dump($users);
    	return response()->json([
    		'users' => $users,
    		'libs' => $libs
		]);
    }
}
