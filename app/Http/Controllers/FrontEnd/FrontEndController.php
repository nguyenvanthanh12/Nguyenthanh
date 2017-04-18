<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use DB,Mail,dateTime;

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
                'HoTen'  =>  'required',
                'email' =>  'required|email'
            ],
            [
                'HoTen.required'  =>  'Họ tên bắt buộc phải nhập !',
                'email.required' =>  'Địa chỉ mail bắt buộc phải phập',
                'email.email'   =>  'Địa chỉ mail bạn nhập không tồn tại !'
            ]
        );
        $data = ['HoTen' => $Request->HoTen,'email' => $Request->email,'TieuDe' => $Request->TieuDe,'NoiDung' => $Request->NoiDung];
        Mail::send('emails.blanks',$data,function($msg){
            $msg->from('tieuyentu1231@gmail.com','ThanhNguyen');
            $msg->to('tieuyentu0987@gmail.com','NguyenThanh')->subject('test mail');
        });
        $contact = new Contact;
        $contact->TieuDe    =   $Request->TieuDe;
        $contact->NoiDung   =   $Request->NoiDung;
        $contact->HoTen     =   $Request->HoTen;
        $contact->email     =   $Request->email;
        $contact->created_at = new dateTime();
        $contact->save();
        echo "<script>
             alert('Cám ơn bạn đã góp ý. Chúng tôi sẽ xem xét và trả lời bạn trong thời gian sớm nhất !');
             window.location = '".URL('/')."'
             </script>";
    }
}
