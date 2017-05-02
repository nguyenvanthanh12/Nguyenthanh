@extends('admin.master')
@section('controller','Quản lý website')
@section('action','Trang chủ')
@section('content')
<div>
	<?php $lienhe = DB::table('ts_lienhe')->select('id','trangthai')->where('trangthai',0)->get();
		$order = DB::table('ts_dondathang')->select('id','trangthai')->where('trangthai',0)->get();
	 ?>
	<div>
		@if(count($lienhe) >0)<h4>Bạn đang có <span class="animation">{{ count($lienhe) }}</span> liên hệ chưa xem !</h4>@endif
		@if(count($order) >0)<h4>Bạn đang có <span class="animation">{{ count($order) }}</span> đơn hàng chưa xem !</h4>@endif
	</div>
</div>
@endsection