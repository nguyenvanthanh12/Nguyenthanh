<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth,dateTime;
class UserController extends Controller
{
    
    public function getUserList() {
    	$data = User::select('id','username','email','password','HoTen','DiaChi','SDT','level')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.modules.taikhoan.list',['data' => $data]);
    }

    public function getUserAdd(){

    	return view('admin.modules.taikhoan.add');
    }

    public function postUserAdd(UserRequest $Request){
    	$user = new User;
    	$user->username = $Request->username;
    	$user->email = $Request->email;
    	$user->password = bcrypt($Request->password);
    	$user->HoTen = $Request->HoTen;
    	$user->DiaChi = $Request->DiaChi;
    	$user->SDT = $Request->SDT;
    	$user->level = $Request->rdoLevel;
    	$user->created_at			=	new dateTime();
    	$user->save();
    	return redirect()->route('getUserList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm tài khoản thành công !']);
    }

    public function getUserDelete($id){
    	$user_current_login = Auth::user()->id;
    	$user_delete = User::find($id);
    	if(($id == 1) || ($user_current_login !=1 && $user_delete['level'] == 1)){
    		return redirect()->route('getUserList')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không được phép xóa tài khoản này !']);
    	}else{
    		$user_delete->delete($id);
    		return redirect()->route('getUserList')->with(['flash_level' => 'success', 'flash_message' => 'Xóa tài khoản thành công !']);
    	}
    }

    public function getUserEdit($id){
    	$data = User::find($id)->toArray();
    	if((Auth::user()->id != 1) && ($id ==1 || ($data['level'] == 1  && (Auth::user()->id != $id)))){
    		return redirect()->route('getUserList')->with(['flash_level' => 'danger', 'flash_message' => 'Bạn không được phép sửa tài khoản này !']);
    	}
    	return view('admin.modules.taikhoan.edit',['data' => $data]);
    }

    public function postUserEdit(Request $Request,$id){
    	$this->validate($Request,
    	 	[
 
    	 		'password'		=>	'required',
    	 		'email'	=>	'required',
    	 		'HoTen'	=>	'required',
    	 		'DiaChi'	=>	'required',
    	 		'SDT'		=>	'required'
    	 	],
    	 	[

    	 		'password.required'		=>	'Bạn chưa nhập mật khẩu !',
    	 		'email.required'		=>	'Bạn chưa nhập địa chỉ email !',
    	 		'HoTen.required'		=>	'Bạn chưa nhập họ tên !',
    	 		'DiaChi.required'		=>	'Bạn chưa nhập địa chỉ !',
    	 		'SDT.required'			=>	'Bạn chưa nhập số điện thoại !'
    	 	]
    	 );
    	$user = User::find($id);
    	$user->password 		=	bcrypt($Request->password);
    	$user->email 			=	$Request->email;
    	$user->HoTen 			=	$Request->HoTen;
    	$user->DiaChi			=	$Request->DiaChi;
    	$user->SDT				=	$Request->SDT;
    	$user->level			=	$Request->rdoLevel;
    	$user->updated_at			=	new dateTime();
    	$user->save();
    	return redirect()->route('getUserList')->with(['flash_level' => 'success', 'flash_message' => 'Sửa tài khoản thành công !']);
    }
}
