<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;
use File,dateTime;

class EventController extends Controller
{
    public function getEventList(){
    	$data = Event::select('id', 'TenSK', 'MoTa', 'Anh', 'created_at')->orderBy('id', 'DESC')->get()->toArray();
    	return view('admin.modules.spkhuyenmai.event.list',compact('data'));
    }

    public function getEventAdd(){
    	return view('admin.modules.spkhuyenmai.event.add');
    }

    public function postEventAdd(Request $rq){
    	$this->validate($rq,[
				'TenSK'   =>	'required'
    		],
    		[
    			'TenSK.required'	=>	'Bạn chưa nhập tên cho sự kiện'
    		]
    	);
    	$event = new Event;
    	
		$event->TenSK =	$rq->TenSK;
		$event->MoTa  =	$rq->MoTa;
		if(isset($rq->fimgEvent)){
			$file_name = $rq->file('fimgEvent')->getClientOriginalName();
			if(strlen($file_name) >0) {
    			$rq->file('fimgEvent')->move('upload/khuyenmai/',$file_name);
    		}
    		$event->Anh   =	$file_name;
		}
    	//$Request->file('igmEven')->move('upload/khuyenmai/',$file_name);
    	$event->created_at		=	new dateTime();
    	$event->save();
    	return redirect()->route('getEventList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm sự kiện thành công !']); 
    }

    public function getEventDelete($id){
    	$data = Event::find($id);
    	File::delete('upload/khuyenmai/'.$data->Anh);
	    $data->delete($id);
	    return redirect()->route('getEventList')->with(['flash_level' => 'success','flash_message' => 'Xóa sự kiện thành công!']);
    }

    public function getEventEdit($id){
    	$data = Event::findOrFail($id);
    	return view('admin.modules.spkhuyenmai.event.edit',['data' => $data]);
    }

    public function postEventEdit($id,Request $Request){
    	$this->validate($Request,
    		[
    			'TenSK'	=>	'required'
    		],
    		[
    			'TenSK.required'	=>	'Tên sự kiện không được bỏ trống'
    		]

    	);
    	$data = Event::find($id);
    	$file_name = $Request->file('igmEven')->getClientOriginalName();
    	$data->TenSK 	=	$Request->TenSK;
    	$data->MoTa 	=	$Request->MoTa;
    	if(strlen($file_name) > 0){
    		$imgCurrent = $Request->fImageCurrent;
    		if(file_exists(public_path().'/upload/khuyenmai/'.$imgCurrent)){
    			File::delete(public_path().'/upload/khuyenmai/'.$imgCurrent);
    		}
    		$Request->file('igmEven')->move('upload/khuyenmai/',$file_name);
    	}
    	$data->Anh 	=	$file_name;
    	$data->updated_at			=	new dateTime();
    	 $data->save();
    	 return redirect()->route('getEventList')->with(['flash_level' => 'success', 'flash_message' => 'Sửa sự kiện thành công !']);
    }
}
