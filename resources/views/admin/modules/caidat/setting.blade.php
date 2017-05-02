@extends('admin.master')
@section('controller','')
@section('action','Cài đặt')
@section('content')

<div class="col-md-8" style="padding-bottom: 100px;">
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		<div class="form-group">
            <label>Logo hiện tại:</label>
            <img src="{!! asset('upload/'.$setting['logo']) !!}" width="150px" class="img-responsive">
            <input type="hidden" name="fImageCurrent" value="{!! $setting['logo'] !!}">
        </div>
        <div class="form-group">
            <label>Thay đổi Logo:</label>
            <input type="file" name="igmEven">
        </div>
		<div class="st_contact form-group">
		
			<h3>Điện thoại liên hệ:</h3>
			<input type="text" name="contact_phone" class="form-control" value="{!! old('contact_phone', isset($setting['sdt']) ? $setting['sdt'] : null) !!}">
		</div>
		<div class="st-color">
			<h3>Màu sắc:</h3>
			<h4>Phần đầu trang:</h4>
			
			<p>Màu hiện tại: <i style="padding: 5px; background-color: {!! $setting['color_top'] !!}; border: solid 1px;">{!! $setting['color_top'] !!}</i></p>
			<div class="well form-group">
			  <div class="input-group input-group-sm">
			    <input type="text" value="" id="demo1" name="color_header" class="form-control" />
			  </div>
			  
		  	</div>
			<h4>Phần chân trang:</h4>
			
			<p>Màu hiện tại: <i style="padding: 5px; background-color: {!! $setting['color_footer'] !!}; border: solid 1px;">{!! $setting['color_footer'] !!}</i></p>
			<div class="well">
			  <input type="text" value="" id="color_footer" name="color_footer" />
			  <div class="colorpickerplus-embed">
			    <div class="colorpickerplus-container"></div>
			  </div>
			</div>
		</div>
		<div class="">
			<input type="submit" class="btn btn-success" value="Lưu">
			<input type="reset" name="" value="reset" class="btn btn-success">
		</div>
	</form>
	
</div>
@endsection