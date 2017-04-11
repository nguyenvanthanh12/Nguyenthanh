<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Models\product;
use App\Models\Cate;
use App\Models\Even1;
use App\Models\parameter;
use App\Models\detailPara;
use App\Models\productImage;
use dateTime,file;
use Input;

class productController extends Controller
{
    public function getProductList(){
        $data = product::select('id','MaSP','TenSP','Gia','');
    	return view('admin.modules.sanpham.list');
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
                    $product_img->idSP  =   $product_id;
                    $val->move('upload/product/imgdetail/',$val->getClientOriginalName());
                    $product_img->save();
                }
            }
        }
        /*if($Request->detailPara){
            $detail = new detailPara;
            $detail->ChiTiet = $Request->detailPara;
            $detail->idSP    =  $product_id;
            $detail->idTS    =  1;
            $detail->save();
        }*/
        return redirect()->route('getProductList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm sản phẩm thành công !']);
    }

    public function getProductDel($id){

    }

    public function getProductEdit($id){
        return view('admin.modules.sanpham.edit');
    }

    public function postProductEdit($id){

    }
}
