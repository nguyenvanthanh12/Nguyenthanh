@extends('frontend.master')
@section('content')
<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li class="active">Giỏ hàng của bạn</li>
  </ul>
</div>
<!-- end breadcrumb -->
<div class="container">
	<div class="col-lg-12">
	    @if (Session::has('flash_message'))
	        <div class="alert alert-{!! Session::get('flash_level') !!}">
	            {!! Session::get('flash_message') !!}
	        </div>
	    @endif
	</div>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>STT</th>
				<th>Sản phẩm</th>
				<th>Số lượng</th>
				<th>Giá bán</th>
				<th>Thành tiền</th>
				<th>Xác nhận</th>
			</tr>
		</thead>
		<tbody>
			<?php $stt=0; ?>
			@foreach($content as $item)
			<?php $stt++; ?>
			<tr>
				<td>{{ $stt }}</td>
				<td>
					<span style="color: red;"> {{ $item->name }}</span>
				</td>
				<td>
					{{ $item->qty }}
					
				</td>
				<td>{{ number_format($item->price) }} <small>₫</small></td>
				<td>{{ number_format($item->price*$item->qty) }} <small>₫</small></td>
				<td><a href="{{ url('xoa-san-pham',['id' => $item->rowId]) }}" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này khỏi giỏ hàng ?')">Xoa</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="col-md-3 form-group"> 
		<input type="text" class="form-control" value="Tổng : {{ Cart::subtotal() }} VND" disabled>
	</div>
	<div class="col-md-9">
		<div style="width: 100%; height: 33px;"></div>
	</div>
	<div class="col-md-12" style="text-align: center;">
		<h4>Thông tin khách hàng</h4>
	</div>
	<div class="col-md-2"></div>
	@if(Auth::check())
	<form class="form-horizontal col-md-8" method="post" action="">
	<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<div class="form-group">
			<label class="col-md-2 control-label">Họ tên:</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="HoTen" value="{!! Auth::user()->HoTen !!}" disabled />
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Email:</label>
			<div class="col-md-6">
				<input type="text" class="form-control" name="email" value="{!! Auth::user()->email !!}" disabled />
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">SDT:</label>
			<div class="col-md-6">
				<input type="text" name="SDT" value="{!! Auth::user()->SDT !!}" class="form-control" disabled />
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Ghi chú:</label>
			<div class="col-md-6">
				<textarea class="form-control" name="GhiChu"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-6">
				<input type="submit" value="Tiếp tục thanh toán" class="btn btn-default" />
				<a href="{!! url('/') !!}" class="btn btn-default">Tiếp tục mua hàng</a>
			</div>
		</div>
	</form>
	@else
	<div style="clear: both;"></div>
		<h4>Bạn cần đăng nhập để mua sản phẩm</h4>
	@endif
	<div class="col-md-2"></div>
</div>
@endsection