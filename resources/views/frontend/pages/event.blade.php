@extends('frontend.master')
@section('description','Liên hệ')
@section('content')
<!-- breadcrumb -->
<div class="khoangcach"></div>
<div class="khoangcach"></div>
<div class="brc">
  <ul class="breadcrumb container">
    <li><a href="{!! url('/') !!}">Trang chủ</a></li>
    <li class="active">Thông tin khuyến mại</li>
  </ul>
</div>
<div class="container">
	<?php $event = DB::table('ts_chuongtrinhkhuyenmai')->get()->toArray(); ?>
	<div class="page-header">
		<h3 style="font-weight: bold;">TechStore khuyến mại</h3>
	</div>
	@foreach($event as $val)
	<div>
		<img src="{!! asset('public/img/khuyenmai.png') !!}" width="100px;" class="img-responsive" style="float:left; padding-right: 10px;">
		<a href="{{ route('khuyenmaichitiet',$val->id) }}"><h4 style="padding-top: 30px;">{!! $val->TenSK !!}</h4></a>
	</div>
	@endforeach
</div>
@endsection