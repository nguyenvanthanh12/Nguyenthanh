<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Event1Request;
use App\Models\Even1;
use App\Models\Event;
use dateTime,File;
class Event1Controll extends Controller
{
    public function getEvent1List(){
    	$data = Even1::select('id', 'Ten', 'idSK','soluong', 'anh', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
    	return view('admin.modules.spkhuyenmai.list',['data' => $data]);
    }

    public function getEvent1Add(){
        $event = Event::select('id','TenSK')->get()->toArray();
    	return view('admin.modules.spkhuyenmai.add',compact('event'));
    }

    public function postEvent1Add(Event1Request $Request){
    	$event = new Even1;
    	$file_name = $Request->file('igmEven')->getClientOriginalName();
    	$event->Ten 		=	$Request->Ten;
        $event->idSK        =   $Request->idSK;
    	$event->soluong 	=	$Request->soluong;
    	$event->anh 		=	$file_name;
    	if(strlen($file_name) >0) {
    		$Request->file('igmEven')->move('upload/khuyenmai/sanpham/',$file_name);
    	}
    	//$Request->file('igmEven')->move('upload/khuyenmai/',$file_name);
    	$event->created_at		=	new dateTime();
    	$event->save();
    	return redirect()->route('getEvent1List')->with(['flash_level' => 'success', 'flash_message' => 'Thêm sản phẩm thành công !']); 
    }

    public function getEvent1Delete($id){
    	$event = Even1::find($id);
    	File::delete('upload/khuyenmai/sanpham/'.$event->anh);
	    $event->delete($id);
	    return redirect()->route('getEvent1List')->with(['flash_level' => 'success','flash_message' => 'Xóa sản phẩm thành công!']);
    }

    public function getEvent1Edit($id){
        $event = Event::select('id','TenSK')->get()->toArray();
    	$data = Even1::findOrFail($id);
    	return view('admin.modules.spkhuyenmai.edit',['data' => $data,'event' => $event]);
    }

    public function postEvent1Edit(Request $Request,$id){

    	 $this->validate($Request,
    	 	[
    	 		'Ten'			=>	'required',
    	 		'soluong'		=>	'required|regex:/[0-9]/'	
    	 	],
    	 	[
                 'Ten.required'     =>	'Bạn chưa điền Tên sản phẩm !',
                 'soluong.required' =>	'Bạn hãy nhập số lượng sản phẩm !',
                 'soluong.regex'    =>	'số lượng sp phải là số nguyên dương !'
    	 		
    	 	]
    	 );
    	 $event = Even1::find($id);
    	 $file_name = $Request->file('igmEven')->getClientOriginalName();
    	 $event->Ten 		=	$Request->Ten;
    	 $event->soluong 	=	$Request->soluong;
    	 $event->anh 		=	$file_name;
         $event->idSK       =   $Request->idSK;
    	 if(strlen($file_name) >0) {
    	 	$fImageCurrent 	= $Request->fImageCurrent;
    	 	if(file_exists(public_path().'/upload/khuyenmai/sanpham/'.$fImageCurrent)){
    	 		File::delete(public_path().'/upload/khuyenmai/sanpham/'.$fImageCurrent);
    	 	}
    	 	
    	 	$Request->file('igmEven')->move('upload/khuyenmai/sanpham/',$file_name);
    	 }
    	 //$Request->file('igmEven')->move('upload/khuyenmai/',$file_name);
    	 $event->updated_at			=	new dateTime();
    	 $event->save();
    	 return redirect()->route('getEvent1List')->with(['flash_level' => 'success', 'flash_message' => 'Sửa sản phẩm thành công !']);
    }
}
