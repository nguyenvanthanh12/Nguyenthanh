<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateAddRequest;
use App\Models\Cate;
use dateTime;

class CateController extends Controller
{
	public function getCateList(){
		$data = Cate::select('id', 'Ten', 'parent_id', 'created_at')->orderBy('id','DESC')->get()->toArray();
		return view('admin.modules.loaisanpham.list',['data' => $data]);
	}
    public function getCateAdd(){
    	$data = Cate::select('id', 'Ten', 'parent_id')->get()->toArray();
    	return view('admin.modules.loaisanpham.add',['data' => $data]);
    }

    public function postCateAdd(CateAddRequest $request){
    	$Cate = new Cate;
        $Cate->Ten = $request->Ten;
        $Cate->TenKhongDau = str_slug($Cate->Ten,'-');
        $Cate->parent_id = $request->parentID;
        $Cate->created_at = new dateTime();
        $Cate->save();
        return redirect()->route('getCateList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm danh mục thành công !']);
    }
}
