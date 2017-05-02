<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
class LoginController extends Controller
{
    public function getLogin(){
    	if(Auth::check() && Auth::user()->level == 1){
    		return redirect('thql_admin');	
    	}
        elseif(Auth::check()){
            return view('admin.login');
        }
    	else{
    		
            return view('admin.login');
    	}
    }

    public function postLogin(LoginRequest $request){
    	$login = [
    		'username' => $request->username,
    		'password' => $request->password,
    		'level'		=>	1
    	];
    	if (Auth::attempt($login)) {
            // Authentication passed...
            return redirect('thql_admin');
        }else{
        	return redirect()->route('getLogin')->with(['flash_level' => 'danger', 'flash_message' => 'Tài khoản hoặc mật khẩu không chính xác']);
        }
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('getLogin');
    }
}
