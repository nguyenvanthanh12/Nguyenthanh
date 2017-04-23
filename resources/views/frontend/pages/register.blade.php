@extends('frontend.master')
@section('content')
<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li class="active">Đăng ký</li>
  </ul>
</div>
<!-- end breadcrumb -->
<div class="container">
	<div class="row">

		<div class="col-md-6">
			<h3>Đăng ký</h3>
			@include('admin.blocks.error')
			<form action="" method="post" class="row">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<div class="form-group col-lg-12">
					<label>Họ và tên</label>
					<input type="text" name="HoTen" id="HoTen" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label>Tài khoản</label>
					<input type="text" name="username" id="username" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label>Email</label>
					<input type="text" name="Email" id="Email" class="form-control"> 
				</div>
				<div class="form-group col-lg-6">
					<label>Mật khẩu</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<div class="form-group col-lg-6">
					<label>Nhập lại mật khẩu</label>
					<input type="password" name="cfpassword" id="cfpassword" class="form-control">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Số điện thoại</label>
					<input type="text" name="SDT" id="SDT" class="form-control" />
				</div>
				<div class="form-group col-lg-6">
					<label>Địa chỉ</label>
					<textarea class="form-control" name="DiaChi"></textarea>
				</div>
				<p>
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary">Đăng ký</button>
					</div>
				</p>
			</form>
		</div>
		<div class="col-md-4" style="padding-top: 53px; padding-left: 30px;">
			Chú ý: Bạn nên điền chính xác thông tin đăng ký để đảm bảo quyền lợi bản thân:
			<p style="color: red;"><i>Nếu thông tin không chính xác chúng tôi sẽ không chịu trách nhiệm nếu sự cố xảy ra.</i></p>
		</div>
	</div>
</div>
@endsection