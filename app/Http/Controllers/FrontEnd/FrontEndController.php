<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FrontEndController extends Controller
{
	public function index(){

		$product = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','BaoHanh')->orderBy('id','DESC')->skip(0)->take(4)->get();
		return view('frontend.pages.home',compact('product'));
	}

    public function getCate($id){
    	$product_cate = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','idLSP')->where('idLSP',$id)->get();
    	//$product_cate[0]->idLSP  Lấy ra cate đang chọn
    	$cate = DB::table('ts_loaisanpham')->select('parent_id')->where('id',$product_cate[0]->idLSP)->first();
    	$menu_cate = DB::table('ts_loaisanpham')->select('id','Ten','TenKhongDau','parent_id')->where('parent_id',$cate->parent_id)->get();
    	$lastest = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','BaoHanh')->where('idLSP',$id)->orderBy('id','DESC')->take(3)->get();
    	$name_cate = DB::table('ts_loaisanpham')->select('Ten')->where('id',$id)->first();
    	return view('frontend.pages.cate',['product_cate' => $product_cate,'menu_cate' => $menu_cate,'lastest' => $lastest,'name_cate' => $name_cate]);
    }

    public function getDetail($id){
    	$product_detail = DB::table('ts_sanpham')->where('id',$id)->first();
    	$imgDetail = DB::table('ts_anh')->select('id','Ten')->where('product_id',$id)->get();
    	return view('frontend.pages.product',['product_detail' => $product_detail,'imgDetail' => $imgDetail]);
    }
}
