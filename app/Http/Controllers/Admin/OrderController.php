<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ct_DH;
use App\Models\Dondathang;
use App\Models\User;

class OrderController extends Controller
{
    public function getListOrder(){
    	$order = Dondathang::select('id','idUser','NgayDatHang','GhiChu','TrangThai')->orderBy('id','DESC')->get()->toArray();
    	return view('admin.modules.donhang.list',compact('order'));
    }

    public function getOrderSt($id){
    	$stOrder = Dondathang::find($id);
		$stOrder->TrangThai = 1;
		$stOrder->save();

		return redirect()->back();
    }

    public function getDetailOrder($id){
    	$orderDetail = Dondathang::find($id);
    	$user = User::select('id','HoTen','SDT','email','DiaChi')->where('id','=',$orderDetail->idUser)->first();
    	$detailOrder = ct_DH::select('idSP','idDDH','SLDat','Gia')->where('idDDH',$id)->get()->toArray();
    	return view('admin.modules.donhang.detail',compact('orderDetail','user','detailOrder'));
    }
}
