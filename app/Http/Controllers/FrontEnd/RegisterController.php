<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\dangnhap;
use App\Models\User;
use dateTime,Input;
use Mail,Auth;
use App\Mail\mymail;


class RegisterController extends Controller
{
    public function getRegister(){
        return view('frontend.pages.register');
    }

    public function postRegister(RegisterRequest $Request){
    	$user = new User();
		$user->username   =	$Request->username;
		$user->email      =	$Request->Email;
		$user->password   =	bcrypt($Request->password);
		$user->HoTen      =	$Request->HoTen;
		$user->DiaChi     =	$Request->DiaChi;
		$user->SDT        =	$Request->SDT;
		$user->created_at =	new dateTime();
    	$user->save();
    	
    	//Mail::to($email)->send(new mymail);
    	return redirect()->back()->with(['flash_level' => 'success', 'flash_message' => 'Đăng ký thành công ! Bạn hãy kiểm tra mail để kích hoạt tài khoản']);
    }

    public function getLogin(){
    	if(!Auth::check()){
    		return view('frontend.pages.login');	
    	}
    	else{
    		return redirect('/');
    	}
    	
    }

    public function postLogin(dangnhap $rq){
    	
		$login = [
			'username' => $rq->username,
			'password' => $rq->password
		];
		if (Auth::attempt($login)) {
	        // Authentication passed...
	        return redirect('/');
	    }else{
	    	return redirect()->back()->with(['flash_level' => 'danger', 'flash_message' => 'Tài khoản hoặc mật khẩu không chính xác']);
	    }
    }

    public function getDangxuat(){
        Auth::logout();
        return redirect()->back();
    }
}
