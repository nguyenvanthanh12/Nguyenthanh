<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use dateTime,File;

class AdvertisementController extends Controller
{
    public function getAdvList(){
    	$data = Advertisement::select('id','url','Anh','ViTri')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.modules.quangcao.list',compact('data'));
    }

    public function getAdvAdd(){
    	return view('admin.modules.quangcao.add');
    }

    public function postAdvAdd(Request $rq){
    	$this->validate($rq,
    		[
    			'Anh'	=>	'required',
    			'ViTri'	=>	'required'
    		],
    		[
    			'Anh.required'	=>	'Bạn chưa nhập hình ảnh cho quảng cáo',
    			'ViTri.required'	=>	'Bạn chưa chọn vị trí cho quảng cáo'
    		]
    	);
    	$Adv = new Advertisement;
    	if($rq->url){
    		$Adv->url = $rq->url;
    	}
    	if(isset($rq->Anh)){
			$file_name = $rq->file('Anh')->getClientOriginalName();
			if(strlen($file_name) >0) {
    			$rq->file('Anh')->move('upload/quangcao/',$file_name);
    		}
    		$Adv->Anh   =	$file_name;
		}
		$Adv->ViTri      =	$rq->ViTri;
		$Adv->created_at = new dateTime();
		$Adv->save();
		return redirect()->route('getAdvList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm quảng cáo thành công !']);
    }

    public function getAdvDel($id){
    	$data = Advertisement::find($id);
    	File::delete('upload/quangcao/'.$data['Anh']);
    	$data->delete($id);
    	return redirect()->route('getAdvList')->with(['flash_level' => 'success', 'flash_message' => 'Xóa quảng cáo thành công !']);
    }

    public function getAdvEdit($id){
    	$Adv = Advertisement::find($id);
    	return view('admin.modules.quangcao.edit',compact('Adv'));
    }

    public function postAdvEdit(Request $req, $id){
    	$data = Advertisement::find($id);
    	$file_name = $req->file('Anh')->getClientOriginalName();
    	if($req->url){
    		$Adv->url = $req->url;
    	}
    	$data->ViTri 	=	$req->ViTri;
    	if(strlen($file_name) > 0){
    		$imgCurrent = $req->fImageCurrent;
    		if(file_exists(public_path().'/upload/quangcao/'.$imgCurrent)){
    			File::delete(public_path().'/upload/quangcao/'.$imgCurrent);
    		}
    		$req->file('Anh')->move('upload/quangcao/',$file_name);
    	}
    	$data->updated_at = new dateTime();
    	$data->save();
    	return redirect()->route('getAdvList')->with(['flash_level' => 'success', 'flash_message' => 'Sửa quảng cáo thành công !']);
    }
}
