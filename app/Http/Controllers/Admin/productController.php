<?php

namespace App\Http\Controllers\Admin;

//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Http\Requests\EditProduct;
use App\Models\product;
use App\Models\Cate;
use App\Models\Even1;
use App\Models\parameter;
use App\Models\detailPara;
use App\Models\productImage;
use dateTime,Request;
use Input,File,DB;

class productController extends Controller
{
    public function getProductList(){
        $data = product::select('id','MaSP','TenSP','Gia','AnhChinh','NoiDung','BaoHanh','idLSP','created_at')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.modules.sanpham.list',['data' => $data]);
    }

    public function getProductAdd(){
        $para = parameter::select('id','Ten')->get()->toArray();
    	$cate = Cate::select('id','Ten','parent_id')->get()->toArray();
    	$event = Even1::select('id','Ten','trangthai')->get()->toArray();
    	return view('admin.modules.sanpham.add',['para' => $para,'cate' => $cate, 'event' => $event]);
    }

    public function postProductAdd(productRequest $Request){
    	$product = new product;
        $file_name = $Request->file('fImages')->getClientOriginalName();
        $product->MaSP        =   $Request->MaSP;
        $product->TenSP       =   $Request->TenSP;
        $product->TenKhongDau =   str_slug($Request->TenSP);
        $product->Gia         =   $Request->Gia;
        $product->AnhChinh    =   $file_name;
        if(strlen($file_name) >0) {
            $Request->file('fImages')->move('upload/product/',$file_name);
        }
        $product->NoiDung     =   $Request->NoiDung;
        $product->BaoHanh     =   $Request->BaoHanh;
        $product->idKM        =   $Request->idKM;
        $product->idLSP       =   $Request->idLSP;
        $product->created_at  =   new dateTime();
        $product->save();
        $product_id = $product->id;
        if($Request->fproductdetail){
            foreach ($Request->fproductdetail as $val) {
                $product_img = new productImage;
                if(isset($val)){
                    $product_img->Ten   =   $val->getClientOriginalName();
                    $product_img->product_id  =   $product_id;
                    $val->move('upload/product/imgdetail/',$val->getClientOriginalName());
                    $product_img->save();
                }
            }
        }

        foreach ($Request->parameter as $param) {
            $detailPara = new detailPara;
            if(isset($param)){
                $detailPara->idTS =  $param;
                $detailPara->product_id =   $product_id;
                $detailPara->save();
            }
        }

        return redirect()->route('getProductList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm sản phẩm thành công !']);
    }

    public function getProductDel($id){
        $prImg = product::find($id)->Image->toArray();
        foreach ($prImg as $value) {
            File::delete('upload/product/imgdetail/'.$value['Ten']);
        }
        DB::table('ts_loaithongso')->where('product_id', '=', $id)->delete();
        $product = product::findOrFail($id);
        File::delete('upload/product/'.$product->AnhChinh);
        $product->delete($id);
        return redirect()->route('getProductList')->with(['flash_level' => 'success', 'flash_message' => 'Sóa sản phẩm thành công !']);
    }

    public function getProductEdit($id){
        $para = parameter::select('id','Ten')->get()->toArray();
        $cate = Cate::select('id','Ten','parent_id')->get()->toArray();
        $event = Even1::select('id','Ten','trangthai')->get()->toArray();
        $product = product::find($id);
        $prImg = product::find($id)->Image;
        return view('admin.modules.sanpham.edit',['para' => $para,'cate' => $cate, 'event' => $event,'product' => $product,'prImg' => $prImg]);
    }

    public function postProductEdit(EditProduct $Request,$id){
        
        $product = product::find($id);
        $fImageCurrent  = '/upload/product/'.Request::input('fImageCurrent');
        if(!empty(Request::file('fImages2'))){
            $file_name = Request::file('fImages2')->getClientOriginalName();
            $product->AnhChinh = $file_name;
            Request::file('fImages2')->move('upload/product/',$file_name);
            if(File::exists($fImageCurrent)){
                File::delete($fImageCurrent);
            }
        }else { echo "không có file"; }
        //$file_name2 = $Request->file('fImages2')->getClientOriginalName();
        $product->MaSP        =   $Request->MaSP2;
        $product->TenSP       =   $Request->TenSP;
        $product->TenKhongDau =   str_slug($Request->TenSP);
        $product->Gia         =   $Request->Gia;
        /*if(strlen($file_name2) >0) {
            
            if(file_exists(public_path().'/upload/product/'.$fImageCurrent)){
                File::delete(public_path().'/upload/product/'.$fImageCurrent);
            }
            
            $Request->file('fImages2')->move('upload/product/',$file_name2);
         }*/
        $product->NoiDung     =   $Request->NoiDung;
        $product->BaoHanh     =   $Request->BaoHanh;
        $product->idKM        =   $Request->idKM;
        $product->idLSP       =   $Request->idLSP;
        $product->updated_at  =   new dateTime();
        $product->save();
        if (!empty($Request->feditdetail)) {
            foreach ($Request->feditdetail as $file) {
                $productImage = new productImage();
                if(isset($file)){
                    $productImage->Ten = $file->getClientOriginalName();
                    $productImage->product_id = $id;
                    $file->move('upload/product/imgdetail/',$file->getClientOriginalName());
                    $productImage->save();
                }
            }
            
        }
        foreach ($Request->parameter as $param) {
            $detailPara = new detailPara;
            if(isset($param)){
                $detailPara->idTS =  $param;
                $detailPara->product_id =   $id;
                $detailPara->save();
            }
        }
         return redirect()->route('getProductList')->with(['flash_level' => 'success', 'flash_message' => 'Sửa sản phẩm thành công !']);

    }

    public function getDelImg($id){
        if(Request::ajax()){
            $idHinh     =   (int)Request::get('idHinh');
            $Ten_DT    =   productImage::find($idHinh);
            if(!empty($Ten_DT)){
                $img = 'upload/product/imgdetail/'.$Ten_DT->Ten;
                if(File::exists($img)){
                    File::delete($img);
                }
                $Ten_DT->delete();
            }
            return "OK";
        }
    }
}
