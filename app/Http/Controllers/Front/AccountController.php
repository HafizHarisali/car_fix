<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AccountController extends Controller
{
    public function login(){
    	$check_user = DB::table('users')
			    	->where(['email' => $request->email,'password' => sha1($request->password)])
			    	->first();
    	if($check_user != null){
    		if($check_user->usertype_id == 1){
    			return view();
    		}
    		elseif($check_user->usertype_id == 2){
    			return view();
    		}
    		elseif($check_user->usertype_id == 3){
    			return view();
    		}
    		else{
    			return view();
    		}
    	}
    }
}
