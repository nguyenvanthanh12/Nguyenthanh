<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\product;
use App\Models\ct_DH;
use App\Models\Dondathang;
use DB,Mail,dateTime,Cart,Auth;

class FrontEndController extends Controller
{
	public function index(){
        
		return view('frontend.pages.home');
	}

    public function getCate($id){
    	$product_cate = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','GiamGia','idLSP')->where('idLSP',$id)->paginate(8);
    	//$product_cate[0]->idLSP  Lấy ra cate đang chọn
        if (count($product_cate) > 0) {
            $cate = DB::table('ts_loaisanpham')->select('id','Ten','parent_id')->where('id',$product_cate[0]->idLSP)->first();
            $menu_cate = DB::table('ts_loaisanpham')->select('id','Ten','TenKhongDau')->where('id',$cate->parent_id)->first();
            $product_gia1 = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','GiamGia','idLSP')->where('idLSP',$id)->whereBetween('Gia', [1, 8000000])->paginate(8);
            $product_gia2 = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','GiamGia','idLSP')->where('idLSP',$id)->whereBetween('Gia', [8000000, 15000000])->paginate(8);
            $product_gia3 = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','GiamGia','idLSP')->where('idLSP',$id)->whereBetween('Gia', [15000000, 25000000])->paginate(8);
            $product_gia4 = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','GiamGia','idLSP')->where('idLSP',$id)->where('Gia', '>=', 25000000)->paginate(8);
        }
    	else{ return redirect()->route('index'); }
    	//$lastest = DB::table('ts_sanpham')->select('id','TenSP','TenKhongDau','Gia','AnhChinh','BaoHanh')->where('idLSP',$id)->orderBy('id','DESC')->take(3)->get();
    	//$name_cate = DB::table('ts_loaisanpham')->select('Ten')->where('id',$id)->first();
    	return view('frontend.pages.cate',compact('product_cate','cate','menu_cate','product_gia1','product_gia2','product_gia3','product_gia4'));
    }

    public function getDetail($id){
    	$product_detail = DB::table('ts_sanpham')->where('id',$id)->first();
    	$imgDetail = DB::table('ts_anh')->select('id','Ten')->where('product_id',$id)->get();
        $cate = DB::table('ts_loaisanpham')->select('id','Ten','parent_id')->where('id',$product_detail->idLSP)->first();
        $menu_cate = DB::table('ts_loaisanpham')->select('id','Ten','parent_id')->where('id',$cate->parent_id)->first();
        $product_cate = DB::table('ts_sanpham')->where('idLSP',$product_detail->idLSP)->where('id','<>',$id)->take(4)->get();
        $paraDetail = DB::table('ts_loaithongso')->select('idTS','product_id','ctTS')->where('product_id',$id)->where('ctTS','<>','')->get();
        $DetailEvent = DB::table('ts_ctspkm')->select('idKM','product_id')->where('product_id',$id)->get();
        
    	return view('frontend.pages.product',['product_detail' => $product_detail,'imgDetail' => $imgDetail,'product_cate' =>$product_cate,'cate' => $cate,'menu_cate' => $menu_cate,'paraDetail' => $paraDetail,'DetailEvent' => $DetailEvent]);
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
        /*Mail::send('emails.blanks',$data,function($msg){
            $msg->from('tieuyentu1231@gmail.com','ThanhNguyen');
            $msg->to('tieuyentu0987@gmail.com','NguyenThanh')->subject('test mail');
        });*/
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

    public function getShopping($id){
        $shopping = DB::table('ts_sanpham')->where('id',$id)->first();
        Cart::add(['id' => $id, 'name' => $shopping->TenSP, 'qty' => 1, 'price' => $shopping->Gia, 'options' => ['img' => $shopping->AnhChinh,'TKD' => $shopping->TenKhongDau]]);
        $content = Cart::content();
        return redirect()->route('getGiohang');
    }

    public function getGiohang(){
        $content = Cart::content();

        return view('frontend.pages.checkout',compact('content'));
    }

    public function postGiohang(Request $rq){
        $order = new Dondathang;
        $order->idUser      =   Auth::user()->id;
        $order->NgayDatHang =   new dateTime();
        $order->GhiChu      =   $rq->GhiChu;
        $order->TrangThai   =   0;
        $order->created_at  =   new dateTime();
        $order->save();

        $idDh = $order->id;
        $content = Cart::content();
        foreach ($content as $val) {
            $detailOrder = new ct_DH;
            $detailOrder->idDDH =   $idDh;
            $detailOrder->idSP  =   $val->id;
            $detailOrder->SLDat =   $val->qty;
            $detailOrder->Gia   =   $val->price*$val->qty;
            $detailOrder->save();
        }

        echo "<script>
             alert('Cám ơn bạn đã mua hàng của chúng tôi ! Chúng tôi sẽ gửi hàng tới bạn trong thời gian sớm nhất.');
             window.location = '".URL('/')."'
             </script>";

    }

    public function getDel($id){
        Cart::remove($id);
        return redirect()->route('getGiohang')->with(['flash_level' => 'success', 'flash_message' => 'xóa sản phẩm thành công !']);
    }

    public function postSearch(Request $rq){
        if(!empty($rq->txtSearch)){
            $tukhoa = $rq->txtSearch;
        }else {
            echo "<script>
             alert('Bạn chưa nhập từ khóa tìm kiếm.');
             window.location = '".URL('/')."'
             </script>";
        }
        return view('frontend.pages.search',compact('tukhoa'));
    }
 
}
