<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Event1Request;
use App\Models\Even1;
use dateTime,File;
class Event1Controll extends Controller
{
    public function getEvent1List(){
    	$data = Even1::select('id', 'Ten', 'HinhThuc', 'Anh', 'NgayBatDau', 'NgayKetThuc', 'trangthai', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
    	return view('admin.modules.khuyenmailoai1.list',['data' => $data]);
    }

    public function getEvent1Add(){
    	return view('admin.modules.khuyenmailoai1.add');
    }

    public function postEvent1Add(Event1Request $Request){
    	$event = new Even1;
    	$file_name = $Request->file('igmEven')->getClientOriginalName();
    	$event->Ten 		=	$Request->Ten;
    	$event->HinhThuc 	=	$Request->HinhThuc;
    	$event->Anh 		=	$file_name;
    	if(strlen($file_name) >0) {
    		$Request->file('igmEven')->move('upload/khuyenmai/',$file_name);
    	}
    	//$Request->file('igmEven')->move('upload/khuyenmai/',$file_name);
    	$event->NgayBatDau 		=	$Request->NgayBatDau;
    	$event->NgayKetThuc 		=	$Request->NgayKetThuc;
    	$event->trangthai 		=	$Request->ttevent;
    	$event->created_at		=	new dateTime();
    	$event->save();
    	return redirect()->route('getEvent1List')->with(['flash_level' => 'success', 'flash_message' => 'Thêm sự kiện thành công !']); 
    }

    public function getEvent1Delete($id){
    	$event = Even1::find($id);
    	File::delete('upload/khuyenmai/'.$event->Anh);
	    $event->delete($id);
	    return redirect()->route('getEvent1List')->with(['flash_level' => 'success','flash_message' => 'Xóa sự kiện thành công!']);
    }

    public function getEvent1Edit($id){
    	$data = Even1::findOrFail($id);
    	return view('admin.modules.khuyenmailoai1.edit',['event' => $data]);
    }

    public function postEvent1Edit(Request $Request,$id){
    	 $this->validate($Request,
    	 	[
    	 		'Ten'			=>	'required',
    	 		'HinhThuc'		=>	'required',
    	 		'NgayBatDau'	=>	'required',
    	 		'NgayKetThuc'	=>	'required'	
    	 	],
    	 	[
    	 		'Ten.required'		=>	'Bạn chưa điền Tên sự kiện !',
    	 		'HinhThuc.required'	=>	'Bạn hãy nhập hình thức diễn ra sự kiện !',
    	 		'NgayBatDau.required'	=>	'Bạn hãy nhập ngày bắt đầu !',
    	 		'NgayKetThuc.required'	=>	'Bạn hãy nhập ngày kết thúc sự kiện !'
    	 	]
    	 );
    	 $event = Even1::find($id);
    	 $file_name = $Request->file('igmEven')->getClientOriginalName();
    	 $event->Ten 		=	$Request->Ten;
    	 $event->HinhThuc 	=	$Request->HinhThuc;
    	 $event->Anh 		=	$file_name;
    	 if(strlen($file_name) >0) {
    	 	$fImageCurrent = $Request->fImageCurrent;
    	 	if(file_exists(public_path().'/upload/khuyenmai/'.$fImageCurrent)){
    	 		File::delete(public_path().'/upload/khuyenmai/'.$fImageCurrent);
    	 	}
    	 	
    	 	$Request->file('igmEven')->move('upload/khuyenmai/',$file_name);
    	 }
    	 //$Request->file('igmEven')->move('upload/khuyenmai/',$file_name);
    	 $event->NgayBatDau 		=	$Request->NgayBatDau;
    	 $event->NgayKetThuc 		=	$Request->NgayKetThuc;
    	 $event->trangthai 		=	$Request->ttevent;
    	 $event->created_at		=	new dateTime();
    	 $event->save();
    	 return redirect()->route('getEvent1List')->with(['flash_level' => 'success', 'flash_message' => 'Thêm sự kiện thành công !']);
    }
}
