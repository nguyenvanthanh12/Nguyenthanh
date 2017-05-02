@extends('frontend.master')
@section('content')
<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li class="active">Giới thiệu</li>
  </ul>
</div>
<!-- end breadcrumb -->
<div class="container" style="width: 800px; margin:auto;">
	<div class="page-header header-intro">Giới thiệu về TechStore.com</div>
	<?php $cate = DB::table('ts_loaisanpham')->where('parent_id',0)->get(); 
		$stt = 0;
	?>
	<div>Thành lập từ tháng 5/2017, đến nay website thương mại điện tử TechStore.com cung cấp các sản phẩm thuộc {!! count($cate) !!} ngành hàng như sau:</div>
	<div class="cate-number">
		@foreach($cate as $item1)
		<?php $stt++; ?>
		<a href="" onclick="return false;" class="btn btn-default">{!! $stt !!}. {!! $item1->Ten !!}</a>
		@endforeach
	</div>
	<div>Với mục tiêu tạo ra những trải nghiệm mua sắm trực tuyến tuyệt vời, TechStore.com luôn nỗ lực không ngừng nhằm nâng cao chất lượng dịch vụ. Khi mua hàng qua mạng tại TechStore.com khách hàng sẽ được hưởng các tiện ích như sau:</div>
	<ul style="padding-left: 40px;">
		<li>Dịch vụ chăm sóc khách hàng tận tình trước-trong-sau khi mua hàng, xuyên suốt 7 ngày/tuần, từ 8:00 đến 21:00</li>
		<li>Mức giá cạnh tranh: hơn 90% sản phẩm được giảm giá từ 10% trở lên</li>
		<li>Giao hàng miễn phí (đối với đơn hàng từ 150.000đ trong phạm vi TP.Hà Nội và từ 250.000đ đối với đơn hàng giao đến các tỉnh thành khác thuộc Việt Nam)</li>
	</ul>
	<div class="contact-intro">
		<p>Quý khách có nhu cầu liên lạc, trao đổi hoặc đóng góp ý kiến, vui lòng tham khảo các thông tin sau:</p>
		<?php $sdt = DB::table('ts_caidat')->where('id',5)->first(); ?>
		<ul style="padding-left: 40px;">
			<li><span style="font-weight: bold;">Liên lạc qua điện thoại:</span>{!! $sdt->sdt !!}</li>
			<li><span style="font-weight: bold;">Liên lạc qua email:</span> <a href="{{ route('getLienhe') }}">techstore.com/lien-he</a></li>
			<li><span style="font-weight: bold;">Địa chỉ nhận hàng đổi/trả/bảo hành:</span>Bảo hành tại các nhà phân phối sản phẩm chính hãng hoặc trực tiếp tại trung tâm xử lý đơn hàng TECHSTORE - 367/F370 Đường Bạch Đằng, P.2, Q.Tân Bình TP. Hồ Chí Minh</li>
		</ul>
	</div>
</div>
@endsection