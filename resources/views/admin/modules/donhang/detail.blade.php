@extends('admin.master')
@section('controller','Đơn hàng')
@section('action','Chi tiết')
@section('content')
<style type="text/css" media="screen">
	.thongtin { color: red; }
</style>
<div class="col-md-12">
	<div style="text-align: center;">
		<h3>Hóa đơn bán hàng</h3>
	</div>
	<div class="col-md-12">
		<div>
			Họ tên khach hàng: <span class="thongtin">{{ $user['HoTen'] }}</span> ,email: <span class="thongtin">{{ $user['email'] }}</span>, Số điện thoại: <span class="thongtin">{{ $user['SDT'] }}</span>
		</div>
		<div>
			Địa chỉ: <span class="thongtin">{{ $user['DiaChi'] }}</span>
		</div>
		<div>
			<span>Ghi chú: {!! $orderDetail['GhiChu'] !!}</span>
		</div>
		<div>
			<span>Trạng thái:  @if($orderDetail['TrangThai'] == 0)
                <a href="{{ route('getOrderSt',$orderDetail['id']) }}" type="button" id="xem"><input type="checkbox" ></a><span style="color: red;"> Chưa giao</span>
                @else
                <input type="checkbox" checked="" disabled><span style="color: blue;"> Đã giao</span>
                @endif</span>
		</div>
		<div>
			<table class="table">
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
					</tr>
				</thead>
				<tbody>
				<?php $stt=0; ?>
				@foreach($detailOrder as $item)
					<?php $stt++; ?>
					<tr>
						<td>{!! $stt !!}</td>
						<td>
							<?php $product = DB::table('ts_sanpham')->where('id',$item['idSP'])->first(); ?>
							<?php echo $product->TenSP; ?>
						</td>
						<td>{{ $item['SLDat'] }}</td>
						<td>{{ number_format($item['Gia']) }}VND</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
		<div>
			<a href="{!! route('getListOrder') !!}" class="btn btn-success">Danh sách đơn hàng</a>
		</div>
		<div style="margin-top: 20px;">
			<span><i>Đơn vị phân máy tinh điện thoại và linh kiện chính hãng TechStore</i></span>
		</div>
	</div>
</div>
@endsection