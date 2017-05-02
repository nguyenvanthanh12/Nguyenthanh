@extends('frontend.master')
@section('description','khuyến mại')
@section('content')
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li class="active">Chi tiết khuyến mại</li>
  </ul>
</div>
<div class="container ct-kuyenmai">
	<div class="page-header" style="font-weight: bold;">{!! $data->TenSK !!}</div>
	<div class="content-event">
		@if(isset($data->Anh))
		<div class="img-ct">
			<img src="{!! asset('upload/khuyenmai/'.$data->Anh) !!}" width="300px" class="img-responsive">
		</div>
		@endif
		<div>
			{{ $data->MoTa }}
		</div>
	</div>
</div>
@endsection
