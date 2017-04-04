<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\parameterRequest;
use App\Models\parameter;
use App\Models\detailPara;
use App\Models\Cate;
use dateTime;

class parameterController extends Controller
{
    public function getparaadd(){
    	return view('admin.modules.thongso.themthongso');
    }

    public function postparaadd(Request $Request){
    	$this->validate($Request,
    		[
    			'Ten'	=>	'required|unique:ts_thongso,Ten'
    		],
    		[
    			'Ten.required'	=>	'Bạn chưa nhập tên của thông số !',
    			'Ten.unique'	=>	'Thông số đã tồn tại !'
    		]
    	);
    	$parameter = new parameter;
    	$parameter->Ten 	=	$Request->Ten;
    	$parameter->created_at =	new dateTime();
    	$parameter->save();
    	return redirect()->route('getParaList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm thông số thành công !']);
    }

    public function getParaList(){
    	$data = parameter::select('id','Ten')->get()->toArray();
    	return view('admin.modules.thongso.list',['data' => $data]);
    }

    /*public function getParaAdd1(){
    	$para = parameter::select('id','Ten')->get()->toArray();
    	$cate = Cate::select('id','Ten','parent_id')->get()->toArray();
    	return view('admin.modules.thongso.add',['para' => $para, 'cate' => $cate]);
    }

    public function postParaAdd1(parameterRequest $request){
		$paraDetail          = new detailPara;
		$paraDetail->idLSP   =	$request->idLSP;
		$paraDetail->idTS    =	$request->thongso;
		$paraDetail->ChiTiet =	$request->ChiTiet;
		$paraDetail->save();
		return redirect()->route('getParaList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm chi tiết thông số thành công !']);
    }*/

    public function getParaDel($id){
    	$para = parameter::find($id);
    	$para->delete($id);
    	return redirect()->route('getParaList')->with(['flash_level' => 'success', 'flash_message' => 'Xóa thông số thành công !']);
    }

    public function getParaEdit($id){
    	$data = parameter::findOrFail($id);
    	return view('admin.modules.thongso.edit',['data' => $data]);
    }

    public function postParaEdit(Request $request,$id){
    	$this->validate($request,
    		[
    			'Ten'	=>	'required',
    		],
    		[
    			'Ten.required'	=>	'Bạn nhập tên thông số !',
    		]
    	);
    	$para = parameter::find($id);
		$para->Ten      = $request->Ten;
		$para->updated_at = new dateTime();
    	$para->save();
    	return redirect()->route('getParaList')->with(['flash_level' => 'success', 'flash_message' => 'Sửa thông số thành công !']);
    }
}
