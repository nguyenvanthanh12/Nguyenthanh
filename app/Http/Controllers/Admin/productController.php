<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\Models\product;
use App\Models\Cate;
use App\Models\Even1;
use App\Models\parameter;
use dateTime,file;

class productController extends Controller
{
    public function getProductList(){
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
        $product->TomTat      =   $Request->TomTat;
        $product->NoiDung     =   $Request->NoiDung;
        $product->BaoHanh     =   $Request->BaoHanh;
        $product->idKM        =   $Request->idKM;
        $product->idLSP       =   $Request->idLSP;
        $product->created_at  =   new dateTime();
        $product->save();
        return redirect()->route('getProductList')->with(['flash_level' => 'success', 'flash_message' => 'Thêm sản phẩm thành công !']);
    }
}
