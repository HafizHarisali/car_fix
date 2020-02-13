<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AccountController extends Controller
{
	public function loginView(){
		return view('auth.login');
	}

    public function login(Request $request){
    	$check_user = DB::table('users')
			    	->where(['email' => $request->email,'password' => sha1($request->password)])
			    	->first();
    	if($check_user != null){
    		if($check_user->usertype_id == 1){
    			session()->put(
    				[
    					'usertype' => $check_user->usertype_id,
    					'useremail' => $check_user->email,
    					'username' => $check_user->first_name,
    					'userid' => $check_user->id,
    				]
    			);
    			return redirect()->route('backend_index');
    		}
    		elseif($check_user->usertype_id == 2){
    			session()->put(
    				[
    					'usertype' => $check_user->usertype_id,
    					'useremail' => $check_user->email,
    					'username' => $check_user->first_name,
    					'userid' => $check_user->id,
    				]
    			);
    			return redirect()->route('backend_index');
    		}
    		elseif($check_user->usertype_id == 3){
    			session()->put(
    				[
    					'usertype' => $check_user->usertype_id,
    					'useremail' => $check_user->email,
    					'username' => $check_user->first_name,
    					'userid' => $check_user->id,
    				]
    			);
    			return redirect()->route('backend_index');
    		}
    		else{
    			return view('auth.login');
    		}
    	}
    }

    public function signupView(){
		return view('auth.signup');
	}

	public function signup(Request $request){
		$arr = [
			'first_name' => $request->firstname, 
			'last_name' => $request->lastname, 
			'phone_no' => $request->phone, 
			'email' => $request->email, 
			'password' => sha1($request->password), 
			'address' => $request->address, 
			'city' => $request->city, 
			'postcode' => $request->postcode,
			'usertype_id' => $request->usertypeid
		];

		$register = DB::table('users')->insert($arr);

		if($register){
			return view('auth.login');
		}else{
			return view('auth.signup');
		}

	}

	public function logout(){
		session()->flush();
		return redirect()->route('index');
	}
}
