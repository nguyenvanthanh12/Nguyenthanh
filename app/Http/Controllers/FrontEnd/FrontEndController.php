<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lienhe;
use DB,Mail;

class FrontEndController extends Controller
{
	public function index(){
        
		return view('frontend.pages.home');
	}

    public function getCate($id){
    	$product_cate = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','idLSP')->where('idLSP',$id)->paginate(12);
    	//$product_cate[0]->idLSP  Lấy ra cate đang chọn
        if (count($product_cate) > 0) {
            $cate = DB::table('ts_loaisanpham')->select('Ten','parent_id')->where('id',$product_cate[0]->idLSP)->first();
            $menu_cate = DB::table('ts_loaisanpham')->select('id','Ten','TenKhongDau')->where('id',$cate->parent_id)->first();
        }
    	else{ return redirect()->route('index'); }
    	//$lastest = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','BaoHanh')->where('idLSP',$id)->orderBy('id','DESC')->take(3)->get();
    	//$name_cate = DB::table('ts_loaisanpham')->select('Ten')->where('id',$id)->first();
    	return view('frontend.pages.cate',['product_cate' => $product_cate,'cate' => $cate,'menu_cate' => $menu_cate]);
    }

    public function getDetail($id){
    	$product_detail = DB::table('ts_sanpham')->where('id',$id)->first();
    	$imgDetail = DB::table('ts_anh')->select('id','Ten')->where('product_id',$id)->get();
        $cate = DB::table('ts_loaisanpham')->select('id','Ten','parent_id')->where('id',$product_detail->idLSP)->first();
        $menu_cate = DB::table('ts_loaisanpham')->select('id','Ten','parent_id')->where('id',$cate->parent_id)->first();
        $product_cate = DB::table('ts_sanpham')->where('idLSP',$product_detail->idLSP)->where('id','<>',$id)->take(4)->get();
    	return view('frontend.pages.product',['product_detail' => $product_detail,'imgDetail' => $imgDetail,'product_cate' =>$product_cate,'cate' => $cate,'menu_cate' => $menu_cate]);
    }

    public function getLienhe(){
        return view('frontend.pages.contact');
    }

    public function postLienhe(Request $Request){
        $this->validate($Request,
            [
                'name'  =>  'required',
                'email' =>  'required'
            ],
            [
                'name.required'  =>  'Họ tên bắt buộc phải nhập !',
                'email.required' =>  'Địa chỉ mail bắt buộc phải phập'
            ]
        );
        $data = ['HoTen' => Request::input('name'),'email' => Request::input('email'),'NoiDung' => Request::input('message')];
        Mail::send('emails.blanks',$data,function($msg){
            $msg->from('tieuyentu0987@gmail.com','ThanhNguyen');
            $msg->to('tieuyentu0987@gmail.com','NguyenThanh')->subject('test mail');
        });
    }
}
