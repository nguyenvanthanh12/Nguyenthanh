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

    public function getCateDelete($id){
    	$parent = Cate::where('parent_id',$id)->count();
    	if($parent == 0){
    	    $cate = Cate::find($id);
    	    $cate->delete($id);
    	    return redirect()->route('getCateList')->with(['flash_level' => 'success','flash_message' => 'Xóa danh mục thành công!']);
    	}else{
    	    return redirect()->route('getCateList')->with(['flash_level' => 'danger','flash_message' => 'Xin lỗi ! Bạn cần xóa danh mục con trước!']);
    	}
    }

    public function getCateEdit($id){
    	$data = Cate::findOrFail($id)->toArray();
    	$parent= Cate::select('id','Ten','parent_id')->get()->toArray();
    	return view('admin.modules.loaisanpham.edit',['data' => $data,'parent' => $parent]);
    }

    public function postCateEdit(Request $Request,$id){
    	$this->validate($Request,
    		['txtCateName' => 'required'],
    		['txtCateName.required' => 'Bạn cần nhập tên danh mục !']
    	);
    	$cate = Cate::find($id);
    	$cate->Ten = $Request->txtCateName;
    	$cate->TenKhongDau = str_slug($cate->Ten,'-');
    	$cate->parent_id = $Request->parentID;
    	$cate->updated_at = new dateTime();
    	$cate->save();
    	return redirect()->route('getCateList')->with(['flash_level' => 'success', 'flash_message' => 'Sửa danh mục thành công !']);
    }
}
